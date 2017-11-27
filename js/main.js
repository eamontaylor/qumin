
function join(lookupTable, mainTable, lookupKey, mainKey, select) {
    var l = lookupTable.length,
        m = mainTable.length,
        lookupIndex = [],
        output = [];
    for (var i = 0; i < l; i++) { // loop through l items
        var row = lookupTable[i];
        lookupIndex[row[lookupKey]] = row; // create an index for lookup table
    }
    for (var j = 0; j < m; j++) { // loop through m items
        var y = mainTable[j];
        var x = lookupIndex[y[mainKey]]; // get corresponding row from lookupTable
        output.push(select(y, x)); // select only the columns you need
    }
    return output;
};

var result = join(albums, photos, "id", "albumId", function(album, photo) {
    return {
        id: album.id,
        title: album.title,
        thumbnailUrl: album.thumbnailUrl,
        photo: (albums !== undefined) ? photo.title : null
    };
});

console.log(result);

Vue.component('latest-post', {
  props: ['post'],
  template:
    '<div class="col-sm-3">\
    <h2 class="detail-panel__section-heading">{{ post.id }}</h2>\
    <h3>{{ post.title }}</h3>\
    <p>{{ post.body }}</p>\
    </div>'
})

var lp = new Vue({
  el: '#latest-posts',
  data: {
    latestPosts: [ ]
  },
  computed: {
    latestPostsList: function () {
     return this.latestPosts.slice(0, 8)
     }
  },
  mounted(){
    axios.get("https://jsonplaceholder.typicode.com/posts")
    .then(response => {this.latestPosts = response.data})
  },

})

Vue.component('album-link', {
  props: ['albumlist'],
  template: '<li><span v-on:click="photoList">{{ albumlist.title }}</span></a></li>',
  data: function(){
    return {
      photoData: []
    }
  },
  // computed: {
  //   albumDataList: function () {
  //    return this.items.slice(0, 8)
  //    }
  // },
  methods:{
    photoList: function () {
      console.log(this.photoData)
      alert('clicked link');
    }
  },
  mounted(){
    // axios.get("https://jsonplaceholder.typicode.com/albums").then(response => {this.albumData = response.data}).catch(function (error) {
    // console.log(error);
    // })
    axios.get("https://jsonplaceholder.typicode.com/photos").then(response => {this.photoData = response.data}).catch(function (error) {
    console.log(error);
    })
  },
})


var al = new Vue({
  el: '#albums',
  data: {
    albumData: [ ],
  },
  computed: {
    albumDataList: function () {
     return this.albumData.slice(0, 5)
     }
  },
  mounted(){
    axios.get("https://jsonplaceholder.typicode.com/albums").then(response => {this.albumData = response.data}).catch(function (error) {
    console.log(error);
    })
  },

})


Vue.component('thumb', {
  props: ['thumbnail'],
  template: '<img :src="thumbnail.thumbnailUrl" classs="img-fluid" />',

})

var ph = new Vue({
  el: '#photos',
  data: {
    photoData: [ ]
  },
  computed: {
    photoDataList: function () {
     return this.photoData.slice(0, 2)
     }
  },
  mounted(){
    axios.get("https://jsonplaceholder.typicode.com/photos").then(response => {this.photoData = response.data}).catch(function (error) {
    console.log(error);
    })
  }
})
