$(document).ready(function () {

    

    $('#modal1').modal({

        dismissible: true,
        startingTop: '4%',

        complete: function(){
            //newGame.startTimer();
        }

        });
  
    var gameApp = document.querySelector('#game');

    var form = document.querySelector('#form');

    var rules = document.querySelector('#rules');

    document.getElementById('btn-rule').onclick = function () {
            if (rules.classList.contains('hide')) {

                rules.classList.remove('hide');

                form.classList.add('hide');

                //rules.setAttribute('value','close rule');

                rules.value = 'close rule';
                //click++;
           } 
        } // end rule click

    document.getElementById('btn-login').onclick = function(){

        if(!rules.classList.contains('hide')){

            rules.classList.add('hide');

            form.classList.remove('hide');
        }
    }

    document.getElementById('btn-start-game').onclick = function () {
            
            // getInfo();
            // data();
            // showGame();

            // Question.readTextFile();
            // Question.getData();
            // newGame.startTimer();

            main();

            if (!form.classList.contains('hide')) {

                form.classList.add('hide');

            }

            if (!rules.classList.contains('hide')) {

                rules.classList.add('hide');

            }
        } //end onclick function start game
    function showGame() {

        if (gameApp.classList.contains('hide')) {

            gameApp.classList.remove('hide');

            gameApp.classList.add('center');

        }

    }

    var user = {

        first_name: 'User',

        age: 0,

        sex: ''

    }

    var Question = {
        questions: '',

        readTextFile: function (file, callback) {

            var rawFile = new XMLHttpRequest();

            rawFile.overrideMimeType("application/json");

            rawFile.open("GET", file, true);

            rawFile.onreadystatechange = function () {

                if (rawFile.readyState === 4 && rawFile.status == "200") {

                    callback(rawFile.responseText);

                }

            }

            rawFile.send(null);

        }, //end read file
        getData: function () {
            this.readTextFile(flagsUrl, function (text) {
                questions = JSON.parse(text);
                //var gameQ = data.Question;
            });

        },
    }// end object question

    var newGame = Object.create(Question);

    function main(){
        newGame.readTextFile()
        newGame.getData();
        var jData = newGame.questions;
        for (var key in jData) {

            key = 2;
            console.log(jData[key].quest);

            for (var tra in jData[key].choice) {
                console.log(jData[key].choice[tra]);
            } //close inner forloop

        } //close outer forloop
        
    }
    var newUser = Object.create(user);


});