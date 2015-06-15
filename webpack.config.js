

module.exports = {
    entry: "./app/app.js",
    output: {
        path: "./app",
        filename: "bundle.js"
    },
    node: {
    fs: "empty"
    // This is just a workaround for an unpleasant error message (https://github.com/webpack/webpack/issues/451)
    },
    module: {
        loaders: [
            { test: /\.jade$/,   loader: "jade-loader?self" },
            { test: /\.sass$/, loader: "style!css!sass?indentedSyntax"},
            { test: /\.coffee$/, loader: "coffee-loader" },
            { test: /\.json$/, loader: "json-loader" },

        ]
    }
};