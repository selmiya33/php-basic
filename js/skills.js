let container = document.querySelector('#skills')
//javascript promise
let promise = fetch('data/skills.json');
promise
    .then( resposne => resposne.json())//promise

    .then(function(skills){
    for (let index = 0; index < skills.length; index++) {
        let skill = skills[index];
        //template letral
        container.innerHTML += "<div><h4>" + skill.name + "</h4>";
        container.innerHTML +=  '<div class="progress">\
        <div style="width: '+ skill.percent+ "%>' +</div></div>";
    }
    })
    .catch(()=>alert("cannt get skills"));
