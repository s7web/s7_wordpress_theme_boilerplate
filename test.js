const glob = require('glob');
const path = require('path');

const assets = glob.sync('./assets/*/*.*');

let entries = {};
assets.forEach(asset => {

        entries = {...entries,  [path.parse(asset).name]: asset }
   
});
 

const web = {
    entry: entries

}
console.log(web);
//  glob.sync('./assets/*/*.*').reduce(function(obj, el){
//  console.log(el);
//     obj[path.parse(el).name] = el;
//     return obj
//  },{}); 