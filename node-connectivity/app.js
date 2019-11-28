const express = require('express');

const bodyParser = require('body-parser');
const app = express();
const { JSDOM } = require('jsdom');
const fs = require("fs");
const mysql = require("mysql");

app.get('/', function (req, res) {
    let doc = fs.readFileSync('./static/html/lab_08_starter.html', 'utf8');
    let dom = new JSDOM(doc);

    res.send(dom.serialize());
})

app.use('/js', express.static('static/js'));
app.use('/css', express.static('static/css'));