class MyAjax{
    constructor(){

    }

    getAdatOnly(apivegpont,tomb){
        tomb.splice(0,tomb.length);
        $.ajax({
            url:apivegpont,
            type:"GET",
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
            }
        });
    }

    getAdat(apivegpont,tomb,myCallback){
        tomb.splice(0,tomb.length);
        $.ajax({
            url:apivegpont,
            type:"GET",
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
                myCallback();
            }
        });
    }

    postAdat(apivegpont,adat){
        $.ajax({
            url:apivegpont,
            type:"POST",
            data:adat,
            success:function(result){
                console.log(result);
            }
        });
        
    }

    deletAdat(apivegpont,id){
        $.ajax({
            url:apivegpont+"/"+id,
            type:"DELETE",
            success:function(result){
                //console.log(result);
            }
        });
        
    }

    putAdat(apivegpont,adat,id,){
        $.ajax({
            url:apivegpont+"/"+id,
            type:"PUT",
            data:adat,
            success:function(result){
                console.log(result);
            }
        });
    }
}