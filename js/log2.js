(function(){
    $(document).ready(function(){
        $('.alt-form').click(function(){
            $('.form-content').animate({
                height:"toggle",
                opacity:'toggle'
            },600);
        });
        
        let formregistro=document.getElementsByName('i-correo');
        for(let i = 0; i < formregistro.length; i++)
        {
            formregistro[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        let formregistro2=document.getElementsByName('i-ci');
        for(let i = 0; i < formregistro2.length; i++)
        {
            formregistro2[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }
        
        let formregistro3=document.getElementsByName('i-contraseña');
        for(let i = 0; i < formregistro3.length; i++)
        {
            formregistro3[i].addEventListener('blur',function(){
                if(this.value.length>=1){
                    this.nextElementSibling.classList.add('active');
                    this.nextElementSibling.classList.remove('error');
                }
                else if(this.value.length=" "){
                    this.nextElementSibling.classList.add('error');
                    this.nextElementSibling.classList.remove('active');
                }
                else{
                    this.nextElementSibling.classList.remove('active');
                }
            })
        }

    })
})()