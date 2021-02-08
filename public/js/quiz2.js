(()=>{



let start_quiz = document.getElementById('start_quiz');
let blackBg = document.getElementById('js-black-bg1');
let popup = document.getElementById('js-popup');
let popup_timeover = document.getElementById('js-popup1');

let to_timeup = 10;
let intervalid;
let start_flag = false;
// var timer=document.getElementById("timer");

function count_start(){
    console.log("count_start");
   if(start_flag===false){
    intervalid = setInterval(count_down,1000);
    start_flag = true;
   }
}



function count_down(){
    console.log("count_down");
       let timer = document.getElementById("timer");
    if(to_timeup===0){
        timer.innerHTML = 'Time up!'
        // timer.style.color="red";
        // clearInterval(intervalid);
        // to_timeup=10; 　　　　　　　　　
        count_stop();
        popup_timeover.classList.add('is-show');
        showEnd_timeover();
    }   else{
        to_timeup--;
        padding();
    }
}

function padding(){
    let timer=document.getElementById("timer");
    let min = 0;
    let sec = 0;
    min = Math.floor(to_timeup/60);
    sec = (to_timeup%60);
    min = ("0"+min).slice(-2);
    sec = ("0"+sec).slice(-2);
    timer.innerHTML = min +":"+ sec;
}

function count_stop(){
    console.log(count_stop);
    clearInterval(intervalid);
    start_flag = false;
}


window.onload = function() {
  start_quiz.classList.add('is-show');
  closePopUp(blackBg);

  function closePopUp() {
    start_quiz.addEventListener('click', function() {
      count_start();
      start_quiz.classList.remove('is-show');
    })
  }
}



const quiz = [
  {
    question: '誉れを言った人気者',
    image: 'images/order_pic.jpg',
    image_alt: 'quiz_image',
    answers: [ '境井仁', '亀', 'かつあき', '花田勝'],
    correct: '境井仁'
  }, {
    question: '１＋１＝',
    image: '',
    image_alt: '',
    answers: [ 'アンディ', '2', 'かつあき', 'たけお'],
    correct: '2'
  }, {
    question: '２＋４＝',
    image: '',
    image_alt: '',
    answers: [ '6', 'としお', 'katus', 'たけお'],
    correct: '6'
  }, {
    question: '５＋５＝',
    image: 'images/order_pic.jpg',
    image_alt: 'quiz_image',
    answers: [ '10', 'garcia', 'かつあき', 'たけお'],
    correct: '10'
  }
];

const $window = window;
const $doc = document;

// 問題文
const $question = $doc.getElementById('js-question');
// 問題画像
const $quiz_image = $doc.getElementById('quiz_image');
// 問題回答
const $buttons = $doc.querySelectorAll('.boab');
// 地図
// const $panel_map = $doc.querySelectorAll('.panel');

const quizLen = quiz.length;
let quizCount = 0;
let score = 0;

const init = () => {
  $question.textContent = quiz[quizCount].question;
  $quiz_image.src = quiz[quizCount].image;
  $quiz_image.alt = quiz[quizCount].image_alt;
  // $panel_map.src = quiz[quizCount].panel_img;
  // $panel_map.alt = quiz[quizCount].panel_alt;
  const buttonLen = $buttons.length;
  let btnIndex = 0;

  while(btnIndex < buttonLen){
    $buttons[btnIndex].textContent = quiz[quizCount].answers[btnIndex];
    btnIndex++;
  }

};

const goToNext = () => {
  quizCount++;
  if(quizCount < quizLen){
    init(quizCount);
  } else {
    // $window.alert('クイズ終了！');
    count_stop();
    popup.classList.add('is-show');
    showEnd();
  }
};

const judge = (elm) => {
  if(elm.textContent === quiz[quizCount].correct){
    score++;
  } else {

  }
  goToNext();
};

// 合否判定
const $congrat = $doc.getElementById('congrat');
const $congrat_timeover = $doc.getElementById("congrat_timeover");

function change_correct(){
  $congrat.href = "/quiz_2_correct";
  $congrat.textContent = "correct";
}

function change_fail(){
  $congrat.href = "/quiz_2_fail";
  $congrat.textContent = "fail";
}

function change_correct_timeover(){
  $congrat_timeover.href = "/quiz_2_correct";
  $congrat_timeover.textContent = "correct";
}
function change_fail_timeover(){
  $congrat_timeover.href = "/quiz_2_fail";
  $congrat_timeover.textContent = "fail";
}

const showEnd = () => {
  document.getElementById('result').textContent = '終了！あなたのスコアは' + score + '/' + quizLen + 'です';
  // judgement();
  if(score > 2){
    change_correct();
   }else{
    change_fail();
   }
  }

const showEnd_timeover = () => {
  document.getElementById('result_timeover').textContent = '終了！あなたのスコアは' + score + '/' + quizLen + 'です';

  // judgement();
    if(score > 2){
      change_correct_timeover();
     }else{
      change_fail_timeover();
     }
  }

init();

let answersIndex = 0;
let answersLen = quiz[quizCount].answers.length;

while(answersIndex < answersLen){
  $buttons[answersIndex].addEventListener('click', (e) => {
    judge(e.target);
  });
  answersIndex++;
}

})();
