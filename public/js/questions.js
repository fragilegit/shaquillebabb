$(document).ready(function () {

    

    $('#modal1').modal({

        dismissible: true,
        startingTop: '4%',

        complete: function(){
            newGame.startTimer();
        }

        });

    function data(){

      if(typeof (Storage) !== 'undefined'){

        if(!localStorage.first_name){

            localStorage.first_name = newUser.first_name;

        }else if(localStorage){

            localStorage.first_name = newUser.first_name;

        }

       document.querySelector('#userName').innerHTML= localStorage.first_name

            

    }else{

         // Sorry! No Web Storage support..

        console.log("Sorry, your browser does not support web storage...");

    }  

    }

    

    

    var gameApp = document.querySelector('#game');

    var form = document.querySelector('#form');

    var rules = document.querySelector('#rules');



    

    document.getElementById('btn-rule').onclick = function () {



            if (rules.classList.contains('hide')) {

                rules.classList.remove('hide');

                form.classList.add('hide');

                //        rules.setAttribute('value','close rule');

                rules.value = 'close rule';

                //click++;

           } 

//                else if (!rules.classList.contains('hide') && form.classList.contains('hide') && click == 2) {

//                rules.classList.add('hide');

//                form.classList.remove('hide');

//                rules.setAttribute('value', 'rules');

//                click = 1;

//            } //end else if

        } // end rule click

    document.getElementById('btn-login').onclick = function(){

        if(!rules.classList.contains('hide')){

            rules.classList.add('hide');

            form.classList.remove('hide');

        }

    }

    document.getElementById('btn-start-game').onclick = function () {

            

            getInfo();

            data();

            showGame();

            

            Question.readTextFile();

            Question.getData();

            newGame.startTimer();



            if (!form.classList.contains('hide')) {

                form.classList.add('hide');

            }

            if (!rules.classList.contains('hide')) {

                rules.classList.add('hide');

            }



        } //end onclick function start game

    

    function getInfo(){

        newUser.first_name = document.querySelector('#firstName').value;

        if(!newUser.first_name){

            newUser.first_name = 'User'

        }

    }

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

    var game = {

        questionHolder: document.getElementsByClassName('question'),

        answerHolder: document.getElementsByClassName('answer'),

        moneyTree: document.getElementsByClassName('moneyTree'),

        option: document.getElementsByClassName('option'),

        bank: document.getElementsByClassName('bank'),

        bank2: document.getElementsByClassName('bank2'),

        bankDeposit: document.getElementById('bank2'),

        timeHolder: document.getElementById('time'),

        level: 8,

        round: 1,

        moneyLevel: 9,

        takeMoney: 0,

        time: 120,

        roundThreeQu: 3,

        userMoney: '',

        choice: '',

        x: '',

        completed: false,



        changeBackground: function () {

            var changed = false

            if (newGame.moneyTree[newGame.level].classList.contains('backGround')) {

                newGame.moneyTree[newGame.level].classList.remove('backGround');



                if (newGame.level > 0) {

                    newGame.moneyTree[newGame.level - 1].classList.add('backGround');

                    newGame.moneyLevel = newGame.moneyLevel - 1;

                } else {

                    newGame.moneyTree[newGame.level].classList.add('backGround');

                    newGame.moneyLevel = newGame.moneyLevel - 1;

                }

                newGame.userMoney = newGame.moneyTree[newGame.moneyLevel].getAttribute('value');

                //alert(newGame.userMoney);



                //game.stopTimer();

                //game.youAreCorrect();



                newGame.level = (parseInt(newGame.level) - 1);

                //Question.getData();

                changed = true;

            } //end if statment

            else {

                changed = false

            }

            return changed;

        },

        changeBackground2: function () {

            var changed = false

            if (newGame.bank2[newGame.level].classList.contains('backGround')) {

                newGame.bank2[newGame.level].classList.remove('backGround');



                if (newGame.level > 0) {

                    newGame.bank2[newGame.level - 1].classList.add('backGround');

                    newGame.moneyLevel = newGame.moneyLevel - 1;

                } else {

                    newGame.bank2[newGame.level].classList.add('backGround');

                    newGame.moneyLevel = newGame.moneyLevel - 1;

                }

                newGame.userMoney = newGame.bank2[newGame.moneyLevel].getAttribute('value');

                

                newGame.level = (parseInt(newGame.level) - 1);

                

                changed = true;

            }//end if statment

            else {

                changed = false

            }

            return changed;

        },

        youAreCorrect: function () {

            

            var messageheader = document.querySelector('#message-header');

            var message = document.querySelector('#display-message');

            var fact = document.querySelector('#display-fact');



            messageheader.innerHTML = "You Are Correct";

           // alert(newGame.round);

            if (newGame.userMoney != 0) {

                message.innerHTML = "Do You Wish To Bank $" + newGame.userMoney + " ?";



                game.showButtons();



                this.option[0].onclick = function () {

                        game.choice = game.option[0].getAttribute('value');

                        if (game.choice == 'YES' || game.choice == 'yes') {

                            message.innerHTML = "You have banked $" + newGame.userMoney;

                            newGame.hideButtons();

                            newGame.takeMoney = parseInt(newGame.takeMoney);

                            newGame.takeMoney += parseInt(newGame.userMoney);

                            if (game.level <= -1) {

                                game.level = 0;

                            }

                            game.moneyTree[game.level].classList.remove('backGround');

                            if (newGame.round == 2) {

                               if(newGame.level < 0){

                                   newGame.level = 0;

                               }

                                newGame.bankDeposit.innerHTML = '$' + newGame.takeMoney;

                                

                                if(!newGame.bank2[5].classList.contains('backGround')){

                                    newGame.bank2[newGame.level].classList.remove('backGround')

                                    newGame.resetGame2();

                                    newGame.userMoney = '';

                                    newGame.bank2[5].classList.add('backGround');

                                }

                                



                            } else if (newGame.round == 1) {                                

                                newGame.bank[0].innerHTML = '$' + newGame.takeMoney;

                                if (!newGame.bank[0].classList.contains('hide')) {

                                    newGame.moneyTree[newGame.level].classList.remove('backGround');

                                    newGame.moneyTree[8].classList.add('backGround');

                                    newGame.resetGame();

                                }

                            }else {

                                console.log("Error with round");

                            }



                        } //end if yes



                    } //end onclick event yes button

                this.option[1].onclick = function () {

                    game.choice = game.option[1].getAttribute('value');

                    if (game.choice == 'NO' || game.choice == 'NO') {

                        console.log(game.choice);

                        hidePopup();

                    }

                }

            } else if (newGame.round == 3) {

                message.innerHTML = "You are playing for $" + newGame.takeMoney + "\n" + newGame.roundThreeQu + " Question(s) left to win";

                if (newGame.roundThreeQu == 1) {

                    message.innerHTML = "You have won $" + newGame.takeMoney;

                    var close = document.getElementsByClassName('modal-close');

                    close[0].onclick = function(){

                        location.reload();

                    }

                    //game.restartGame();

                }

            }else {

                message.innerHTML = "You cannot bank $" + this.userMoney;

                game.hideButtons();

            }

            if (Question.fact) {

                fact.innerHTML = Question.fact;

            }

            newGame.showPopup();



        }, //end function you are correct

        showPopup: function () {

            newGame.stopTimer();

            $('#modal1').modal('open');

        }, //end popup   

        resetGame: function () {

            this.level = 8;

            this.moneyLevel = 9;

            //this.time = 300;

            this.choice = '';

            this.round = 1;

            this.userMoney = 0;

        },

        resetGame2: function () {

            this.level = 5;

            this.moneyLevel = 6;

            //this.time = 300;

//            this.choice = '';

//            this.round = 2;

//            this.userMoney = 0;

        },

        hideButtons: function () {

            var holder = document.querySelector('#button-holder');

            if (!holder.classList.contains('hide')) {

                holder.classList.add('hide');

            }

        },

        showButtons: function () {

            var holder = document.querySelector('#button-holder');

            if (holder.classList.contains('hide')) {

                holder.classList.remove('hide');

            }

        },

        startTimer: function () {

            newGame.x = setInterval(function () {



                var minutes = newGame.time / 60;

                var seconds = newGame.time % 60;



                if (seconds == 0) {

                    // Output the result in an element with id="demo"

                    newGame.timeHolder.innerHTML = parseInt(minutes) + ":" + seconds + "0" ;

                    newGame.time--;



                } else if(seconds < 10){

                  newGame.timeHolder.innerHTML = parseInt(minutes) + ":0" + seconds;

                  newGame.time--;

                } else {

                    // Output the result in an element with id="demo"

                    newGame.timeHolder.innerHTML = parseInt(minutes) + ":" + seconds;

                    newGame.time--;

                }

                if (newGame.round == 1) {

                    if (newGame.takeMoney >= 500000) {

                            newGame.bankDeposit.innerHTML = '$' + newGame.takeMoney;

                            newGame.showRoundTwo();

                        } else{

                    }

                }

                // If the count down is over, write some text 

                if (newGame.time == -1) {

                    

                    clearInterval(newGame.x);

                    

                    if(newGame.completed && newGame.takeMoney !==0){

                        newGame.completed= true;

                        newGame.showRoundThree();

                        

                    }else if(!newGame.completed) {

//                       

                        newGame.showRoundTwo();

                        newGame.bankDeposit.innerHTML=newGame.takeMoney;

                       

                    }else{

                        newGame.youLose();

                    }

                    Question.getData();

                }

            }, 1000);



        },

        showRoundTwo: function () {

        var bank = document.getElementsByClassName('bankWrapper');

        if (bank[1].classList.contains('hide')) {

            bank[1].classList.remove('hide');

            bank[0].classList.add('hide');

            var bankInfo = document.getElementsByClassName('bank3')[0];

            bankInfo.innerHTML = "$" + game.takeMoney;

            newGame.round = 2;

            document.querySelector('.round').innerHTML = newGame.round;

            

            clearInterval(newGame.x);

            newGame.time = 90;

            newGame.level = 5;

            newGame.moneyLevel = 6;

            newGame.completed = true;

            newGame.startTimer();



        }



    },

        showRoundThree: function () {

        var bank = document.getElementsByClassName('bankWrapper');

        if (!bank[1].classList.contains('hide')) {

            bank[1].classList.add('hide');



            newGame.round = 3;

            newGame.level = 6;

            newGame.time = 100;

            if (newGame.completed) {

                newGame.startTimer();

            }

            document.querySelector('.round').innerHTML = newGame.round;

        }

    },

        youLose: function () {

        var message = document.querySelector('#message-bay');

        var userbank = document.querySelector('#game-modal-bay');

        var popupHeader = document.getElementsByClassName('popHeader');

        var close = document.getElementsByClassName('modal-close');

        var messageheader = document.querySelector('#message-header');

        var fact = document.querySelector('#factDis');



        messageheader.innerHTML = "You Lose";

            if(message.classList.contains('hide') ){

                message.classList.remove('hide');

                userbank.classList.add('hide');

                message.innerHTML = "You Have Been Deem The Weakest Link";

                $('#modal1').modal('open');

                close[0].onclick = function(){

                    location.reload();

                }    

            }

//        newGame.hideButtons();

//        game.hidePopUp = true;

    },

        stopTimer: function () {

        clearInterval(newGame.x);

    }

    };

    

    var newGame = Object.create(game);

    var newUser = Object.create(user);



    var Question = {

        questionArray: [],

        fact: '',



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

                var data = JSON.parse(text);

                var gameQ = data.Question;

                Question.displayQuest(gameQ);

            });

        },

        displayQuest: function (jData) {

            var i = 0;

            var ran = this.randomizeQuestion(jData);



            //console.log("Question to go to " + ran);

            for (var key in jData) {

                key = ran;



                this.question = jData[key].quest;

                this.id = jData[key].id;

                this.fact = jData[key].fact;

                newGame.questionHolder[i].innerHTML = this.question;



                for (var tra in jData[key].choice) {



                    this.choice = jData[key].choice[tra];

                    newGame.answerHolder[tra].innerHTML = this.choice;

                    this.nextLevel(this.id, this.choice, this.fact);

                } //close inner forloop

            } //close outer forloop

        }, //end displayQuestion

        randomizeQuestion: function (qData) {



            this.question = Math.floor((Math.random() * qData.length));



            var newQ = this.ifQuestionAsked(this.question, qData);

            if (newQ) {

                this.question = Math.floor((Math.random() * qData.length));

                this.getData();



            }

            return this.question;

        },

        ifQuestionAsked: function (asked, data) {

            console.log("/--Question " + asked + " has been asked--/");

            console.log("If question asked return true: " + this.questionArray.includes(asked));



            var qasked = this.questionArray.includes(asked);

            if (!qasked) {

                this.questionArray.push(asked);

            }

            var info = "";



            for (var i = 0; i <= this.questionArray.length - 1; i++) {

                info += this.questionArray[i] + ", ";

            }



            console.log("data in Array " + info);



            return qasked;

        },

        nextLevel: function (qId, ch, fa) {



            var choice;

            newGame.answerHolder[0].onclick = function () {

                newGame.choice = newGame.answerHolder[0].getAttribute('value');

                Question.ifCorrect(qId, newGame.choice, fa);

            }

            newGame.answerHolder[1].onclick = function () {

                newGame.choice = newGame.answerHolder[1].getAttribute('value');

                Question.ifCorrect(qId, newGame.choice, fa);

            }

            newGame.answerHolder[2].onclick = function () {

                newGame.choice = newGame.answerHolder[2].getAttribute('value');

                Question.ifCorrect(qId, newGame.choice, fa);

            }



        },

        ifCorrect: function (question, userChoice) {

            var bank = 0;



            if (question == userChoice) {

                console.log("Current level is: " + newGame.level);

                console.log("^^^^^^^^^^^^^_____^^^^^^^^^^^^");



                if (newGame.round == 1) {

                    if (newGame.changeBackground()) {

                        //game.stopTimer();

                        newGame.youAreCorrect();



                        Question.getData();

                    } else {

                        console.log('The element doesnt contains class to be removed');

                    }

                } else if (newGame.round == 2) {

                    //Question.showBank2();

                    if (newGame.level >= 8) {

                        newGame.resetGame2();

                    } else if (newGame.changeBackground2()) {

                        //game.stopTimer();

                        newGame.youAreCorrect();



                        Question.getData();

                    } else {

                        console.log('The element doesnt contains class to be removed');

                    }

                   // if (newGame.bank2[newGame.level].classList.contains('backGround')) {

                        //newGame.bank2[newGame.level].classList.remove('backGround');

                        //newGame.bank2[newGame.level - 1].classList.add('backGround');

                        //newGame.moneyLevel = newGame.moneyLevel - 1;



                        //newGame.userMoney = newGame.bank2[newGame.moneyLevel].getAttribute('value');

                    

                        



//                        newGame.level = (parseInt(newGame.level) - 1);

//                        if (newGame.takeMoney < 1000000) {

//                            Question.getData();

//                        } else if (newGame.takeMoney >= 1000000) {

//                            newGame.round = 3;

//                        } else {

//                            console.log("Error something went wrong");

//                        }



                    //} //end if statment

                } else if (newGame.round == 3) {



                    newGame.youAreCorrect();

                    newGame.roundThreeQu = (parseInt(newGame.roundThreeQu) - 1);

                    Question.getData();

                }

                //                else {

                //                    console.log("The game is not in either round one, two or three.");

                //                }





            } else if (game.round == 3 && question != userChoice) {



                game.youLose();



            } else {

                //this.youLose();



                //this.readTextFile();

                if (newGame.round == 1) {

                    newGame.moneyTree[newGame.level].classList.remove('backGround');

                    newGame.moneyTree[8].classList.add('backGround');

                    newGame.resetGame();

                    Materialize.toast('Incorrect Answer, bank starts @ $0', 7000);

                }else if(newGame.round == 2){

                    if(!newGame.bank2[5].classList.contains('backGround')){

                        newGame.bank2[newGame.level].classList.remove('backGround')

                        newGame.resetGame2()

                        newGame.userMoney = '';

                        newGame.bank2[5].classList.add('backGround');

                    }

                    Materialize.toast('Incorrect Answer, bank starts @ $0', 7000);

                }



                this.getData();



            }

        }, //end if function

        showBank2: function () {

            var banks = document.getElementsByClassName('bankWrapper');

            if (!banks[0].classList.contains('hide')) {

                banks[0].classList.add('hide')

                banks[1].classList.remove('hide')

            }

        }

    }

});