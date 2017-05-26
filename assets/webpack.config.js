/* 引入操作路径模块和webpack */
var path = require('path');
var webpack=require('webpack');
module.exports = {
    devtool: 'eval-source-map',
    /* 输入文件 */
    entry: {
        adminUser:'./src/admin/user.js',
        adminProduct:'./src/admin/product.js',
        adminOrder:'./src/admin/order.js',
        adminMessage:'./src/admin/message.js',
        adminForm:'./src/admin/form.js'
    },
    output: {
        /* 输出目录，没有则新建 */
        path: path.resolve(__dirname, './js'),
        /* 静态目录，可以直接从这里取文件 */
        publicPath: '/dist/',
        /* 文件名 */
        filename: '[name].js'
    },
    module: {
        rules: [
            /* 用来解析vue后缀的文件 */
            {
                test: /\.vue$/,
                loader: 'vue-loader'
            },
            /* 用babel来解析js文件并把es6的语法转换成浏览器认识的语法 */
            {
                test: /\.js$/,
                loader: 'babel-loader',
                /* 排除模块安装目录的文件 */
                exclude: /node_modules/
            }
        ]
    },
    plugins: [
        new webpack.optimize.UglifyJsPlugin({
            compress: {
                warnings: false
            }
        })
    ]
}

