let urlfield=document.querySelector('.inputt')
let ifield=document.querySelector('.input-field')
let preview=document.querySelector('.submit')
let imgSrc=preview.querySelector('.example')
let hided=document.querySelector('.hidden-input')
urlfield.onkeyup=()=>{
    preview.classList.add('active')
    preview.classList.add('actives')
   if(urlfield.value.indexOf("https://www.youtube.com/watch?v=")!=-1){
  let vidId=urlfield.value.split("v=")[1].substring(0,11);
  let imgUrl="https://img.youtube.com/vi/"+vidId+"/maxresdefault.jpg";
  imgSrc.src=imgUrl;
   }
   else if(urlfield.value.indexOf("https://youtu.be/")!=-1){
    let vidId=urlfield.value.split("be/")[1].substring(0,11);
    let imgUrl="https://img.youtube.com/vi/"+vidId+"/maxresdefault.jpg";
    imgSrc.src=imgUrl;

   }
   else if(urlfield.value.match("/\.(jpe?g|png|gif|bmp|webp)$/i")){
       imgSrc.src=urlfield.value
}
else{
       imgSrc.src=""
       preview.classList.remove('active');
}
hided.value=imgSrc.src;
}
//https://img.youtube.com/vi/${vidId}/maxresdefault.jpg
//"https://www.youtube.com/watch?v="
//"https://www.youtube.com/watch?v=""