<template>
  <section class="section destination">
    <div class="section__inner">
      <div class="destination-lists">
        <h3 class="destination-lists__ttl">宛先人一覧</h3><!-- .destination-lists__ttl -->
        <table class="destination-lists__table">
          <tr class="destination-lists__table-header">
            <th>氏名</th><th>郵便番号</th><th>住所</th><th>編集</th><th>削除</th>
          </tr><!-- .destination-lists__table-header -->
          <template v-for="(destination, key) in destinations">
            <tr class="destination-lists__table-row" :key="key">
              <td>{{ destination.l_name}} {{ destination.f_name }}</td>
              <td>{{ destination.postal_code }}</td>
              <td>{{ destination.prefecture.name }}{{ destination.city.name }}{{ destination.address_etc }}</td>
              <td><button class="edit" @click="setUpdate(destination.id)">編集</button></td>
              <td><button class="delete" @click="del(destination.id)">削除</button></td>
            </tr>
          </template>
        </table><!-- .destination-lists__table -->
      </div><!-- .destination-lists -->
      <div class="destination-create">
        <h3 class="destination-create__ttl" v-if="btnFlg == 'create'">宛先人登録フォーム</h3>
        <h3 class="destination-create__ttl" v-else-if="btnFlg == 'update'">宛先人更新フォーム</h3>
        <h3 class="destination-create__ttl" v-else-if="btnFlg == 'search'">宛先人検索フォーム</h3>
        <form @submit.prevent class="destination-create__form">
          <table>
            <tr>
              <th><label for="l_name">姓</label></th>
              <td><input v-model="postData.l_name" type="text" name="l_name" id="l_name" placeholder="姓"></td>
            </tr>
            <tr>
              <th><label for="f_name">名</label></th>
              <td><input v-model="postData.f_name" type="text" name="f_name" id="f_name" placeholder="名"></td>
            </tr>
            <tr>
              <th><label for="prefecture_id">都道府県</label></th>
              <td>
                <select name="prefecture_id" id="prefecture_id" v-model="postData.prefecture_id" @change="setCity">
                  <option value="0">選択してください</option>
                  <option v-for="(prefecture, key) in prefectures" :key="key" :value="prefecture.id">{{ prefecture.name }}</option>
                </select>
              </td>
            </tr>
            <tr>
              <th><label for="city_id">市町村</label></th>
              <td>
                <select name="city_id" id="city_id" v-model="postData.city_id">
                  <option value="0">選択してください</option>
                  <option v-for="(city, key) in citys" :key="key" :value="city.id">{{ city.name }}</option>
                </select>
              </td>
            </tr>
            <tr>
              <th><label for="address_etc">番地等</label></th>
              <td><input v-model="postData.address_etc" type="text" name="address_etc" id="address_etc" placeholder="番地等"></td>
            </tr>
            <tr>
              <th><label for="postal_code">郵便番号</label></th>
              <td><input v-model="postData.postal_code" type="text" name="postal_code" id="postal_code" placeholder="郵便番号"></td>
            </tr>
            <tr>
              <th><label for="favorite">お気に入り</label></th>
              <td><input v-model="postData.favorite" type="checkbox" name="favorite" id="favorite"></td>
            </tr>
          </table>
          <input type="hidden" name="_token" :value="csrf">
          <button type="submit" v-if="btnFlg == 'create'" @click="create">登録</button>
          <button type="submit" v-else-if="btnFlg == 'update'" @click="update">更新</button>
          <button type="submit" v-else-if="btnFlg == 'search'" @click="search">検索</button>
        </form>
      </div><!-- destination-create -->
      <!-- 切り替えボタン -->
      <div class="changeBtn" @click="changeForm()"><i class="fas fa-exchange-alt"></i></div><!-- .changeBtn -->
      <!-- エラー一覧 -->
      <ul v-if="validateFlg != true" class="errors">
        <template v-for="(error, key) in errors">
          <li class="error" :key="key">{{ error }}</li>
        </template>
      </ul><!-- errors -->
    </div><!-- .section__inner -->
  </section><!-- .section destination -->
</template>

<script>
const axios = require('axios');
export default {
  name: "DestinationComponent",
  data: function(){
    return {
      destinations: [],
      prefectures: [],
      citys: [],
      postData: {
        l_name: '',
        f_name: '',
        prefecture_id: 0,
        city_id: 0,
        address_etc: '',
        postal_code: '',
        favorite: false
      },
      errors: [],
      btnFlg: 'create',
      validateFlg: true,
      updateId: 0
    };
  },
  props: {
    csrf: {
      type: String,
      required: true
    }
  },
  mounted: function(){
    // 一覧セット
    this.setList();
    // 都道府県セット
    this.setPrefecture();
  },
  methods: {
    /**
     * 一覧描画メソッド
     */
    setList: function(){
      axios.get('/destination/json').then(res => {
        this.destinations = res.data;
      }).catch(e => {
        console.log(e.res.data.errors);
      });
    },
    /**
     * 都道府県セットメソッド
     */
    setPrefecture: function(){
      axios.get('/prefecture/json').then(res => {
        this.prefectures = res.data;
      }).catch(e => {
        console.log(e.res.data.errors);
      });
    },
    /**
     * 市町村セットメソッド
     */
    setCity: function(){
      // 都道府県ID
      let id = this.postData.prefecture_id;

      // 市町村IDリセット
      this.city_id = 0;

      // 都道府県IDに該当する市町村データを取得
      axios.get('/city/json/' + id).then(res => {
        this.citys = res.data;
      }).catch(e => {
        console.log(e.res.data.errors);
      });
    },
    /**
     * 登録メソッド
     */
    create: function(){
      // バリデーション
      this.validate();
      if(!this.validateFlg){
        return;
      }
      // 登録処理
      axios.post('/destination/create', this.postData).then(res => {
        console.log(res);
        // 一覧再描画
        this.setList();
        // フォームクリア
        this.clearForm();
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * 更新セットメソッド
     */
    setUpdate: function(id){
      // ボタンセット
      this.btnFlg = 'update';
      // 更新IDセット
      this.updateId = id;
      // フォームセット
      axios.get('/destination/set_update/' + id).then(res => {
        console.log(res);
        this.postData.l_name = res.data.l_name;
        this.postData.f_name = res.data.f_name;
        this.postData.prefecture_id = res.data.prefecture_id;
        this.setCity();
        this.postData.city_id = res.data.city_id;
        this.postData.address_etc = res.data.address_etc;
        this.postData.postal_code = res.data.postal_code;
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * 更新メソッド
     */
    update: function(){
      // バリデーション
      this.validate();
      if(!this.validateFlg){
        return;
      }
      // 更新処理
      axios.post('/destination/update/' + this.updateId, this.postData).then(res => {
        console.log(res);
        // 一覧再描画
        this.setList();
        // フォームクリア
        this.clearForm();
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * 検索メソッド
     */
    search: function(){
      // 検索処理
      axios.post('/destination/search', this.postData).then(res => {
        console.log(res);
        // 検索結果描画
        this.destinations = res.data;
        // フォームクリア
        this.clearForm();
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * 削除メソッド
     */
    del: function(id){
      if(!window.confirm('本当に削除しますか？')){
        return false;
      }
      axios.delete('/destination/delete/' + id).then(res => {
        console.log(res);
        // 一覧再描画
        this.setList();
        // フォームクリア
        this.clearForm();
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * バリデーションメソッド
     */
    validate: function(){
      // エラークリア
      this.validateFlg = true;
      this.errors = [];

      // 姓
      if(!this.postData.l_name){
        this.errors.push("姓は必須項目です。");
        this.validateFlg = false;
      }
      else if(!isNaN(parseInt(this.postData.l_name))){
        this.errors.push("姓は文字列で入力してください。");
        this.validateFlg = false;
      }
      else if(this.postData.l_name.length > 50){
        this.errors.push("姓は50文字以内で入力してください。");
        this.validateFlg = false;
      }
      // 名
      if(!this.postData.f_name){
        this.errors.push("名は必須項目です。");
        this.validateFlg = false;
      }
      else if(!isNaN(parseInt(this.postData.f_name))){
        this.errors.push("名は文字列で入力してください。");
        this.validateFlg = false;
      }
      else if(this.postData.f_name.length > 50){
        this.errors.push("名は50文字以内で入力してください。");
        this.validateFlg = false;
      }
      // 都道府県
      if(!this.postData.prefecture_id){
        this.errors.push("都道府県は必須項目です。");
        this.validateFlg = false;
      }
      // 市町村
      if(!this.postData.city_id){
        this.errors.push("市町村は必須項目です。");
        this.validateFlg = false;
      }
      // 番地等
      if(!this.postData.address_etc){
        this.errors.push("番地等は必須項目です。");
        this.validateFlg = false;
      }
      else if(!isNaN(parseInt(this.postData.address_etc))){
        this.errors.push("番地等は文字列で入力してください。");
        this.validateFlg = false;
      }
      else if(this.postData.address_etc.length > 100){
        this.errors.push("番地等は100文字以内で入力してください。");
        this.validateFlg = false;
      }
      // 郵便番号
      if(!this.postData.postal_code){
        this.errors.push("郵便番号は必須項目です。");
        this.validateFlg = false;
      }
      else if(!this.postData.postal_code.match(/^\d{3}-\d{4}$/)){
        this.errors.push("郵便番号は000-0000の形式で入力してください。");
        this.validateFlg = false;
      }
    },
    /**
     * フォームクリアメソッド
     */
    clearForm: function(){
      // ボタンクリア
      this.btnFlg = 'create';
      // 更新IDクリア
      this.updateId = 0;
      // フォームクリア
      this.postData.l_name = '';
      this.postData.f_name = '';
      this.postData.prefecture_id = 0;
      this.postData.city_id = 0;
      this.postData.address_etc = '';
      this.postData.postal_code = '';
    },
    /**
     * フォーム切り替えメソッド
     */
    changeForm: function(){
      if(this.btnFlg == 'create'){
        this.btnFlg = 'search';
      }else{
        this.clearForm();
      }
    }
  }
}
</script>