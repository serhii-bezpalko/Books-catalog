<script>
    createBtn('{{ $route }}');
    editBtn('{{ $route }}');
    deleteBtn('{{ $route }}');

    function createBtn(route) {
        $(document).on('click', '.createBtn', function () {
            $.ajax({
                url: '/' + route + '/create',
                type: 'GET',
                success: function (html) {
                    $('#modalContainer').html(html);
                    $('#create_modal').modal('show');
                },
                error: function () {
                    alert('Error loading form');
                }
            });
        });
    }

    function editBtn(route) {
        $(document).on('click', '.editBtn', function () {
            let id = $(this).data('id');
            $.ajax({
                url: '/' + route + '/' + id + '/edit',
                type: 'GET',
                success: function (html) {
                    $('#modalContainer').html(html);
                    $('#edit_modal').modal('show');
                },
                error: function () {
                    alert('Error loading form');
                }
            });
        });
    }

    function deleteBtn(route) {
        $(document).on('click', '.deleteBtn', function () {
            let id = $(this).data('id');

            $.ajax({
                url: '/' + route + '/' + id,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    _method: 'DELETE'
                },
                success: function () {
                    fetch(route);
                }
            })
        });
    }

    function fetch(route) {
        $.ajax({
            url: '/' + route,
            type: 'GET',
            success: function (html) {
                $('#list').html(html.list);
                $('#pagination').html(html.pagination);
            }
        });
    }

</script>
