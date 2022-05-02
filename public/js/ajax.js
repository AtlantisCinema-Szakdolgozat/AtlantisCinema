class MyAjax{
    constructor(){

    }

    getAdatOnly(apivegpont,tomb){
        tomb.splice(0,tomb.length);
        $.ajax({
            url:apivegpont,
            type:"GET",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
            },
            error: function(result) {
                alert("Adatbetöltés sikertelen!");
            }
        });
    }

    getAdat(apivegpont,tomb,myCallback){
        tomb.splice(0,tomb.length);
        $.ajax({
            url:apivegpont,
            type:"GET",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
                myCallback();
            },
            error: function(result) {
                alert("Adatbetöltés sikertelen!");
            }
        });
    }

    getAdat2(apivegpont,tomb,myCallback){
        tomb=[];
        $.ajax({
            url:apivegpont,
            type:"GET",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
                result.forEach(element => {
                    tomb.push(element)
                });
                myCallback(tomb);
            },
            error: function(result) {
                alert("Adatbetöltés sikertelen!");
            }
        });
    }

    postAdat2(apivegpont,adat,myCallback){
        $.ajax({
            url:apivegpont,
            type:"POST",
            data:adat,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
                myCallback();
            },
            error: function(result) {
                alert("Adatfeltöltés sikertelen!");
            }
        });
        
    }

    postAdat(apivegpont,adat){
        $.ajax({
            url:apivegpont,
            type:"POST",
            data:adat,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
            }
            ,
            error: function(result) {
                alert("Adatfeltöltés sikertelen!");
            }
        });
        
    }

    deletAdat(apivegpont,id,calback,sor){
        $.ajax({
            url:apivegpont+"/"+id,
            type:"DELETE",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data){
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
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(result){
            },
            error: function(result) {
                alert("Adatmódosítás sikertelen!");
            }
        });
    }
}