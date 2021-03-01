<template>
  <section class="section user-info">
    <div class="section__inner">
      <!-- ユーザー情報一覧 -->
      <div class="user-info-lists">
        <h3 class="user-info-lists__ttl">ユーザー情報</h3>
        <table class="user-info-lists__table--user">
          <tr>
            <th>氏名</th>
            <td>{{ user.l_name }} {{ user.f_name }}</td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td>{{ user.email }}</td>
          </tr>
        </table><!-- user-info-lists__table -->
      </div><!-- user-info-lists -->
      <!-- ユーザー情報編集フォーム -->
      <div class="user-info-update">
        <h3 class="user-info-update__ttl">ユーザー情報編集フォーム</h3>
        <form @submit.prevent class="user-info-update__form">
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
              <th><label for="email">メールアドレス</label></th>
              <td><input v-model="postData.email" type="text" name="email" id="email" placeholder="メールアドレス"></td>
            </tr>
          </table>
          <input type="hidden" name="_token" :value="csrf">
          <button type="submit" @click="update">編集</button>
        </form>
      </div><!-- user-info-udpate -->
      <!-- エラー一覧 -->
      <ul v-if="validateFlg != true" class="errors">
        <template v-for="(error, key) in errors">
          <li class="error" :key="key">{{ error }}</li>
        </template>
      </ul><!-- errors -->
    </div><!-- section__inner -->
  </section><!-- user-info -->
</template>

<script>
const axios = require('axios');
export default {
  name: "FromComponent",
  data: function(){
    return {
      user: [],
      prefectures: [],
      citys: [],
      postData: {
        l_name: '',
        f_name: '',
        email: ''
      },
      errors: [],
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
    // 更新セット
    this.setUpdate();
  },
  methods: {
    /**
     * 一覧描画メソッド
     */
    setList: function(){
      axios.get('/user_info/json').then(res => {
        this.user = res.data;
      }).catch(e => {
        console.log(e.res.data.errors);
      });
    },
    /**
     * 更新セットメソッド
     */
    setUpdate: function(){
      // フォームセット
      axios.get('/user_info/set_update').then(res => {
        console.log(res);
        this.postData.l_name = res.data.l_name;
        this.postData.f_name = res.data.f_name;
        this.postData.email = res.data.email;
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
      axios.post('/user_info/update', this.postData).then(res => {
        console.log(res);
        // 一覧再描画
        this.setList();
        // 更新セット
        this.setUpdate();
        // アラート
        alert("更新しました！");
      }).catch(e => {
        console.log(e);
      });
    },
    /**
     * 退会メソッド
     */
    // del: function(){
    //   if(!window.confirm('本当に退会しますか？')){
    //     return false;
    //   }
    //   axios.delete('/user_info/delete').then(res => {
    //     console.log(res);
    //     // 一覧再描画
    //     this.setList();
    //     // フォームクリア
    //     this.clearForm();
    //   }).catch(e => {
    //     console.log(e);
    //   });
    // },
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
      // メールアドレス
      if(!this.postData.email){
        this.errors.push("メールアドレスは必須項目です。");
        this.validateFlg = false;
      }
      else if(!this.postData.email.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
        this.errors.push("メールアドレスの形式で入力してください。");
        this.validateFlg = false;
      }
    },
    /**
     * フォームクリアメソッド
     */
    clearForm: function(){
      // フォームクリア
      this.postData.l_name = '';
      this.postData.f_name = '';
      this.postData.email = '';
    }
  }
}
</script>