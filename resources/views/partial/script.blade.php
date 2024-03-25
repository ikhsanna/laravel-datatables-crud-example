
{{-- get data index --}}
<script type="text/javascript">
    
    $(document).ready(function (){
        isi()
    })

    function isi(){
        $('#pegawai-table').DataTable({
            serverside : true,
            responsive : true,
            ajax : {
                url: "{{Route('pegawai.index')}}",
            },
            columns: [
            {
                "data": null,
                "sortable": false,
                render: function (data, type, row, meta) {
                    return '<label class="fancy-checkbox">' +
                               '<input class="select-row" type="checkbox" name="row-checkbox">' +
                               '<span></span>' +
                           '</label>';
                }
            },
            {data: 'name', name: 'name'},
            {data: 'address', name: 'address'},
            {data: 'action', name: 'action'}
        ]
            
        })
    }

</script>
<script>
    $('#simpan').on('click',function () {
        if ($(this).text() === 'Simpan Edit') {
            // console.log('Edit');
           edits()
        } else {
          tambah()
        }

    })

    $(document).on('click','.edit', function () {
        let id = $(this).attr('id')
        $('#tambah').click()
        $('#simpan').text('Simpan Edit')

        $.ajax({
            url : "{{route('pegawai.edits')}}",
            type : 'post',
            data : {
                id : id,
                _token : "{{csrf_token()}}"
            },
            success: function (res) {
                $('#id').val(res.data.id)
                $('#name').val(res.data.name)
                $('#address').val(res.data.address)
            }
        })

    })
  
    // tambah pegawai
    function tambah(){
        $.ajax({
            url: "{{Route('pegawai.store')}}",
            type: "post",
            data: {
                name : $('#name').val(),
                address : $('#address').val(),
                "_token" : "{{csrf_token()}}"
            },
            success: function(res){
                console.log(res);
                alert(res.text)
                $('#tutup').click()
                $('#pegawai-table').DataTable().ajax.reload()
                $('#name').val(null)
                $('#address').val(null)
            },
            error : function (xhr){
                alert(xhr.responJson.text);
            }
        })

    }

    // edit
    function edits() {
        $.ajax({
                url : "{{route('pegawai.updates')}}",
                type : "post",
                data : {
                    id : $('#id').val(),
                    name : $('#name').val(),
                    address : $('#address').val(),
                    
                    "_token" : "{{csrf_token()}}"
                },
                success : function (res) {
                    console.log(res);
                    alert(res.text)
                    $('#tutup').click()
                    $('#pegawai-table').DataTable().ajax.reload()
                    $('#name').val(null)
                    $('#address').val(null)
                    
                    $('#simpan').text('Simpan Edit')
                },
                error : function (xhr) {
                    alert(xhr.responJson.text)
                }
            }) 
    }


    // destroy
    $(document).on('click','.hapus', function () {
        let id = $(this).attr('id')
        $.ajax({
            url : "{{route('pegawai.hapus')}}",
            type : 'post',
            data: {
                id: id,
                "_token" : "{{csrf_token()}}"
            },
            success: function (params) {
                alert(params.text)
                $('#pegawai-table').DataTable().ajax.reload()
            }
        })
    })
        

        
    
</script>