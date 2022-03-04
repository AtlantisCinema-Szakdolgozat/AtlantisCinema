class MyAjax{
    constructor(){

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

    deletAdat(apivegpont,id,calback,sor){
        $.ajax({
            url:apivegpont+"/"+id,
            type:"DELETE",
            success:function(data){
                console.log(data);
                calback(sor);
            },
            error: function(data) {
                alert("NO");
            }
        });
        
    }

    putAdat(apivegpont,adat,id){
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