<template>
  <div class="from-create">
    <h3 class="from-create__ttl">差出人登録フォーム</h3>
    <form action="/from/create" method="POST" class="from-create__form">
      <table>
        <tr>
          <th><label for="l_name">姓</label></th>
          <td><input type="text" name="l_name" id="l_name" placeholder="姓"></td>
        </tr>
        <tr>
          <th><label for="f_name">名</label></th>
          <td><input type="text" name="f_name" id="f_name" placeholder="名"></td>
        </tr>
        <tr>
          <th><label for="prefecture_id">都道府県</label></th>
          <td>
            <select name="prefecture_id" id="prefecture_id" v-model="prefecture_id" @change="selectPrefecture">
              <option value="0">選択してください</option>
              <option v-for="(prefecture, key) in prefectures" :key="key" :value="prefecture.id">{{ prefecture.name }}</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="city_id">市町村</label></th>
          <td>
            <select name="city_id" id="city_id" v-model="city_id">
              <option value="0">選択してください</option>
              <option v-for="(city, key) in citys" :key="key" :value="city.id">{{ city.name }}</option>
            </select>
          </td>
        </tr>
        <tr>
          <th><label for="address_etc">番地等</label></th>
          <td><input type="text" name="address_etc" id="address_etc" placeholder="番地等"></td>
        </tr>
        <tr>
          <th><label for="postal_code">郵便番号</label></th>
          <td><input type="text" name="postal_code" id="postal_code" placeholder="郵便番号"></td>
        </tr>
      </table>
      <input type="hidden" name="_token" :value="csrf">
      <button type="submit">差出人登録</button>
    </form>
  </div><!-- from-create -->
</template>

<script>
const axios = require('axios');
export default {
  name: "FromComponent",
  data: function(){
    return {
      prefectures: [],
      prefecture_id: 0,
      citys: [],
      city_id: 0
    };
  },
  props: {
    csrf: {
      type: String,
      required: true
    }
  },
  mounted: function(){
    // 都道府県セット
    axios.get('/prefecture/json').then(res => {
      this.prefectures = res.data;
    }).catch(e => {
      console.log(e.res.data.errors);
    });
  },
  methods: {
    // 市町村セット
    selectPrefecture: function(){
      // 都道府県ID
      let id = this.prefecture_id;

      // 市町村IDリセット
      this.city_id = 0;

      // 都道府県IDに該当する市町村データを取得
      axios.get('/city/json/' + id).then(res => {
        this.citys = res.data;
      }).catch(e => {
        console.log(e.res.data.errors);
      });
    }
  }
}
</script>