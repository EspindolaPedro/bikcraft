document.addEventListener('DOMContentLoaded',()=>{
    const dts = document.querySelectorAll('.dt');
    dts.forEach(dt=>{ //percorre todos os elementos dt's
        dt.addEventListener('mouseover',()=>{ //função mouse over
            dts.forEach(otherDt => { //forEach para saber em qual elemento o mouse está passando e remover do anterior
                if(otherDt !== dt){
                    otherDt.classList.remove('active')
                }
            })            
            dt.classList.add('active');
        })
    })
})
/*
chama o documeno e adiciona o evento DOMcontentLoaded, chama função anonima.
cria uma var chamando o dt
faz um forEach
adciona a função mouseover
se outroDt não estiver recebendo dt
remove a classList active
*/