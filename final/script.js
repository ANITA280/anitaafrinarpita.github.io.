 let theme= localStorage.getItem('theme')

 if(theme==null){
    setTheme('light-mode')
 }else{
    setTheme(theme)
 }
 
 let themeDots= document.getElementsByClassName('theme-dot')

 for(var i=0; themeDots.length>i; i=i+1){
    themeDots[i].addEventListener('click',function(){
        let mode= this.id
        console.log('Option clicked:',mode)
setTheme(mode)
    })
 }
    function setTheme(mode){
if (mode=='light-mode'){
    document.getElementById('theme-style').href='default.css'
}
if (mode=='brown-mode'){
    document.getElementById('theme-style').href='brown.css'
}
if (mode=='blue-mode'){
    document.getElementById('theme-style').href='blue.css'
}
if (mode=='green-mode'){
    document.getElementById('theme-style').href='green.css'
}
localStorage.setItem('theme',mode)
    }

 