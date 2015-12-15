var express = require('express');
var app = express();
var http = require('http');
var fs = require('fs');
//require('bootstrap');

var http = require("http");
http.createServer(function(request, response) {
var file_path = "./index1.html";
require("fs").readFile(file_path, "binary", function(err, file) {
                    if (err) {
                        response.writeHead(500, {
                            'Content-Type': 'text/plain'
                        });
                        response.end(err);
                    } 
                    else {
                        response.writeHead(200, {
                            'Content-Type': 'text/html'
                        });
                        response.write(file, "binary");
                        response.end();
                    }
                }); }).listen(5050);
console.log("服务启动...");