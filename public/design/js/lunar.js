let counter = 1 ,
    len = 1,
    boxes = document.querySelectorAll('.show-enter li'),
    btnList = document.querySelectorAll('.buttons-list li'),
    mypin = document.getElementById('pin');

mypin.style.display = "none";
btnList.forEach(li => {
    li.addEventListener("click", (e)=> {
        boxes.forEach(box => {
            if (counter <= 4){
                if (counter == box.dataset.index){
                    let newSpan = document.createElement('span');
                    box.appendChild(newSpan);
                }
            }
        });
        if (counter >= 4){
            li.parentElement.querySelectorAll('input').forEach(elemnts => {
                elemnts.classList.add('disable');
            });
        }else {
            counter++;
        }
        if (len <= 4){
            mypin.value += e.target.value;
            len ++;
        }
    });

});
