$(function (){
    axios.get("/calificaciones/get").then(function (response){
        let data = response.data;
        let table =  "<table class='table'>" +
            "<thead>" +
            "<th>Alumno</th>" +
            "<th>Materia</th>" +
            "<th>Calificacion</th>" +
            "<th>Aprobada</th>" +
            "</thead>" +
            "<tbody>";

        data.calificaciones.forEach(item=>{
            table+= "<tr>" +
                "<td>"+item.alumno+"</td>" +
                "<td>"+item.materia+"</td>" +
                "<td>"+item.calificacion+"</td>" +
                "<td>"+item.aprobada+"</td>" +
                "</tr>";
        })

        table+="</tbody>" +
            "</table>";
        $("#tabla-js").append(table);
    });

    $("#botoncito").on("click",function () {
        let nombre = $("#alumno").val();
        let materia = $("#materia").val();
        let calificacion = $("#calificacion").val();
        let aprobada = $("#aprobada").val();

        axios.post("/calificaciones/registrar",{
            "alumno":nombre,
            "materia":materia,
            "calificacion":calificacion,
            "aprobada":aprobada,
        }).then(function (response){
            let data = response.data;
            Swal.fire({
                icon: 'success',
                title: 'Bien',
                text: data.msg,
                footer: '<a href>Why do I have this issue?</a>'
            })
        });
    });
});
