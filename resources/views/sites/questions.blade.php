@extends('layouts.questions')
@section('content')

        {{--  MODAL      --}}
        <section id="modal1" class="modal teal darken-1" style="top: 25%">
    
            <div class="modal-content">
    
                <div class="row center">
    
                    <h4 id="message-header" class="col s11 l11">HEADER INFOMATION</h1>
    
                    <span class="col s1 l1 modal-close btnteal darken-1 "><i class="material-icons">close</i></span>
    
                </div>
    
                <div id="game-modal-bay" class="row">
    
                    <div class="col s6 l6 center">
    
                        <h4 class="">BANK</h4>
    
                        <div id="display-message" class="center">
    
                            NO BANK
    
                        </div>
    
                        <div class="section hide" id="button-holder">
    
                            <a class="modal-action waves-effect waves-green btn-flat option" value="yes">Yes</a>
    
                        <a class="modal-action modal-close waves-effect waves-green btn-flat option" value="no">No</a>
    
                        </div>
    
                    </div>
    
                    <div class="col s6 l6">
    
                        <h4 class="center">FACT</h4>
    
                        <div id="display-fact" class="">
    
                            NO FACT 
    
                        </div>
    
                    </div>
    
                </div>
    
                <div id="message-bay" class="hide">
    
                    
    
                </div>
    
    
    
            </div>
    
        </section>
    
    
    
        <div class="container">
    
            {{--  FORM  --}}
    
            <div id="form" class="row ">
    
                <h4 class="col s6 l6 offset-l3 offset-s3 offset-m3 center white z-depth-5">Enter Your Details to Begin</h4>
    
                <form class="col s6 offset-s3 white z-depth-5">
    
                    <div class="row">
    
                        <div class="input-field col s12 m12 l12">
    
                            <input type="text" class="validate info" id="firstName" />
    
                            <label for="firstName">User Name</label>
    
                        </div>
    
    <!--
    
                        <div class="input-field col s6">
    
                            <input type="text" class="validate info" id="lastname" />
    
                            <label for="lastname">Last Name</label>
    
                        </div>
    
    -->
    
                    </div>
    
                    <div class="row">
    
                        <div class="input-field col s6 m6 l6">
    
                            <input type="number" class="validate" id="age" max="100" min="1" />
    
                            <label for="age">Age</label>
    
                        </div>
    
                        <div class="input-field col s6">
    
                            <p>
    
                                <input type="radio" name="sex" class="sex" id="male" value="male" />
    
                                <label for="male">Male</label>
    
                                <input type="radio" name="sex" class="sex" id="female" value="female" />
    
                                <label for="female">Female</label>
    
                            </p>
    
                        </div>
    
                    </div>
    
                    <div class="row center">
    
                        <div class="col s6">
    
                            <a id="btn-start-game" class="btn teal lighten-2">Start Game</a>
    
                        </div>
    
                        <div class="col s6">
    
                            <a id="btn-rule" class="btn waves-effect waves-red btn-flat teal lighten-5">Rules</a>
    
                        </div>
    
                    </div>
    
                </form>
    
            </div>
    
            {{--  RULES  --}}
    
            <section id="rules" class="hide">
    
                <h2 class="centerTag center">Game Rules</h2>
    
                <a class="btn" id="btn-login">Begin</a>
    
    
    
    
    
                <h4>
    
                        HI welcome to the weakest link!
    
                    </h4>
    
    
    
                <p>
    
                    Thank you taking the time to read the rules of the game so you can enjoy yourself while learning other things you may not know.
    
                </p>
    
    
    
    
    
    
    
                <h4>
    
                        Overview 
    
                    </h4>
    
    
    
                <p>
    
                    The game consists of three rounds. The first two rounds of the game are mandatory but the last is only accessible if you have money in the bank.
    
                </p>
    
    
    
    
    
                <h4>
    
                        Bank
    
                    </h4>
    
    
    
                <p>
    
                    At the bottom of the first two rounds there is one element labelled "BANK". The bank is where you can place your money from the money tree to make you don't lose it when you answer a question wrongly.
    
                </p>
    
    
    
    
    
                <h4>
    
                        Money Tree
    
                    </h4>
    
    
    
                <p>
    
                    The amount of money you earn will be shown on the "money tree". When you answer a question correctly your money tree level will go up by one. If your money tree level is not on $0 you will be given the choice to bank the bank or continue on, to increase the level of your money tree.
    
                </p>
    
    
    
    
    
                <h4>
    
                        Round 1
    
                    </h4>
    
    
    
                <p>
    
                    The first round of the game consists of nine levels in the money tree. As mention earlier to move up the money tree answer the questions correctly. If you don't your money tree will be reset to 0 and you lose the money from the money tree. The most you can bank from this round is $500,000. At the end of the round the money you have in your bank will be carried across to round two. You will have two minutes to complete this task or bank $500,000 before the time runs out. Your extra time will not carry over into round two.
    
                </p>
    
    
    
    
    
    
    
    
    
                <h4>
    
                        Round 2 
    
                    </h4>
    
    
    
                <p>
    
                    Just like round one you will be asked a series of questions the same rules apply. However, the money tree now has 6 levels. You will now be given 90 seconds to answer as many questions as possible. If at the end of this round you do not have any money in your bank you will be deem the weakest link and send back to the home page if not you will be carried into round three. Note this round you can only bank up to $1,000,000 dollars.
    
                </p>
    
    
    
    
    
    
    
    
    
    
    
                <h4>
    
                        Round 3
    
                    </h4>
    
    
    
                <p>
    
                    You now have one minute to answer a series of questions. This is a sudden death round any wrong answer will be make you the weakest link. If you answer all the question you will be allowed to go away with all the money that you earned form the two rounds before.
    
                </p>
    
    
    
            </section>
    
           {{--  GAME APP  --}}
    
            <section id="game" class="row hide">
    
    
    
                <div id="" class="col s12 l12">
    
                    <div class="section row">
    
                        <div class="col s2 l2">
    
                            <a class="btn"> 
    
                                <i class="material-icons" id="sound">volume_up</i>
    
                            </a>
    
                        </div>
    
                        <div class="col s3 l3">
    
                            <a class="btn">
    
                                <i class="material-icons left" id="">timer</i><span id="time">02:00</span>
    
                            </a>
    
                        </div>
    
                        <div class="col s2 l2">
    
                            <a class="btn">
    
                                <i class="material-icons left" id="">explore</i><span class="round">1</span></a>
    
                        </div>
    
                        <div class="col s5 l5">
    
                           <a class="btn left truncate">
    
                               <i class="material-icons left" id="sound">account_circle</i>Hi: <span id="userName">User</span>
    
                           </a> 
    
                        </div>
    
                    </div>
    
    
    
                </div>
    
               {{--  BANK MONEY TREE 1  --}}
    
                <aside class="col s4 l4 bankWrapper" style="color: red">
    
                    <div class="center row">
    
                        <a class="moneyTree btn btn-large rounded" value="500000">$500000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree btn btn-large rounded" value="250000">$250000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree btn btn-large rounded" value="125000">$125000</a>
    
                    </div>
    
                    
    
                    <div class="divider"></div>
    
                    
    
                    <div class="center row">
    
                        <a class="moneyTree btn small rounded" value="75000">$75000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree btn small rounded" value="50000">$50000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree btn small rounded" value="10000">$10000</a>
    
                    </div>
    
                    
    
                    <div class="divider"></div>
    
                    
    
                    <div class="center row">
    
                        <a class="moneyTree btn extra-small rounded" value="5000">$5000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree btn extra-small rounded" value="1000">$1000</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="moneyTree backGround btn extra-small rounded" value="0">$0</a>
    
                    </div>
    
                    <div class="center">
    
                        <a class="bank btn btn-large rounded orange lighten-1">$0</a>
    
                    </div>
    
                </aside>    
    
                {{--  BANK MONEY 2  --}}
    
                <aside class="col s4 l4 bankWrapper hide" style="color: red">
    
                    
    
                    <div class="center row">
    
                        <div class="bank2 moneyTree btn btn-large rounded" value="500000">$500000</div>
    
                    </div>
    
                    <div class="center row">
    
                        <div class="bank2 moneyTree btn btn-large rounded" value="125000">$125000</div>
    
                    </div>
    
                    <div class="center row">
    
                        <div class="bank2 moneyTree btn rounded" value="75000">$75000</div>
    
                    </div>
    
                    <div class="center row">
    
                        <div class="bank2 moneyTree btn rounded" value="10000">$10000</div>
    
                    </div>
    
                    <div class="center row">
    
                        <div class="bank2 moneyTree btn extra-small rounded" value="1000">$1000</div>
    
                    </div>
    
                    <div class="center row">
    
                        <a class="bank2 moneyTree backGround btn extra-small rounded" value="0">$0</a>
    
                    </div>
    
                    <div class="center row">
    
                        <a id="bank2" class="bank3 btn btn-large rounded outline">$0</a>
    
                    </div>
    
                    
    
                </aside>
    
               {{--  QUESTION AND ANSWER  --}}
    
                <artilce id="question-bay" class="col s8 l8 center-align">
    
    
    
                    <div class="row fix-height-q valign-wrapper">
    
                        <div class="col s12 question ">
    
                            Question Here
    
                        </div>
    
                    </div>
    
    
    
                    <div class="row valign-wrapper fix-height">
    
                        <div class="col s6 offset-s3 answer1 answer" value="1">Answer one here</div>
    
                    </div>
    
    
    
                    <div class="row valign-wrapper fix-height">
    
                        <div class="col s6 offset-s3 answer2 answer" value="2">Answer two here</div>
    
                    </div>
    
    
    
                    <div class="row valign-wrapper fix-height">
    
                        <div class="col s6 offset-s3 answer3 answer " value="3">Answer three here</div>
    
                    </div>
    
                </artilce>
    
            </section>
    
       
        {{--  <script type="text/javascript" src="{{ URL::asset('sites/js/quest.json')}}"></script>
        <script src="{{ URL::asset('sites/js/ooscript.js')}}"></script>  --}}
        {{--  <script src="libraries\jquery\jquery.min.js"></script>
        <script src="libraries\materialize\materialize.min.js"></script>  --}}

    </div>
    
@endsection