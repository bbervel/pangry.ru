"use strict"
const log = console.log;

document.addEventListener("DOMContentLoaded", function () {
    let previewBtn = document.getElementById( 'preview-btn' );
    let previewContent = document.getElementsByClassName('mudule');
    let contentItems = document.getElementsByClassName('content-item');
    let closeCross = document.getElementsByClassName('close-cross');
    let saveBtn = document.getElementById( 'save-btn' );
    previewBtn.onclick = function() {
        previewContent[0].style.display = 'block';
        let person = document.getElementById( 'person' );
        let theme = document.getElementById( 'theme' );
        let message = document.getElementById( 'message' );
        for(let i=0;i<contentItems.length;i++){
            let formArray = [person,theme,message]
            contentItems[i].innerHTML = formArray[i].value;
        }
    }
let form = document.createElement('form');
    form.action = 'php/send.php';
    form.method = 'POST';
    
    //form.innerHTML = '<input name="person" value="person.value"><input name="theme" value="theme.value"><input name="message" value="message.value">';
    // перед отправкой формы, её нужно вставить в документ
    document.body.append(form);


    previewContent[0].onclick = function(){
        previewContent[0].style.display = 'none';
    }
    closeCross[0].onclick = function(){
        previewContent[0].style.display = 'none';
    }
    saveBtn.onclick = function(){
        previewContent[0].style.display = 'none';
        form.innerHTML = '<input name="person" value="'+person.value+'"><input name="theme" value="'+theme.value+'"><input name="message" value="'+message.value+'">';
        form.submit();
    }

//recapcha
let token = '6LfBjEsgAAAAAJ766bzn4mLHk7i7SvA3_sMwXjkX';
function onSubmit(token) {
    form.submit();
  }

});
