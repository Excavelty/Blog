document.addEventListener('DOMContentLoaded', function(){//https://www.youtube.com/watch?v=me8Ry7dJCFc
    let content = document.getElementById('content');
    document.getElementById('article').contentWindow.document.body.innerHTML = content.value;
    content.value = "";
    article.document.designMode = 'ON';

    document.getElementById("insertImage").addEventListener('click', askForUrl);
    document.getElementById('article').contentWindow.document.body.style.color = 'white';
    
    let buttonsNoParam = document.getElementsByClassName('buttonsNoParam');
    let length = buttonsNoParam.length;
    
    for(let i = 0; i < length; ++i){
        buttonsNoParam[i].addEventListener('click', function(){
            execCommand(buttonsNoParam[i].id);
        });
    }
    
    buttonsParam = document.getElementsByClassName('buttonsParam');
    length = buttonsParam.length;
    
    for(let i = 0; i < length; ++i){
        buttonsParam[i].addEventListener('change', function(){
           execCommandWithParam(buttonsParam[i].id, buttonsParam[i].value); 
        });
    }
    
    document.getElementById('send').addEventListener('click', function(){
        const text = document.getElementById('article').contentWindow.document.body.innerHTML;
        document.getElementById('content').value = text; 
    });
});
function execCommand(command){
    article.document.execCommand(command, false, null);
}
function execCommandWithParam(command, param){
    article.document.execCommand(command, false, param);
}
function askForUrl(){
    article.document.execCommand("insertImage", prompt("Wprowadź url:"));
}