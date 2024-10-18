@section('content')
    <div class="container">
        <h1>User Management</h1>

        <!-- Table to display users -->
        <table class="table table-bordered" id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr id="user{{ $user->id }}">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <button class="btn btn-primary edit-btn" data-id="{{ $user->id }}">Edit</button>
                            <button class="btn btn-danger delete-btn" data-id="{{ $user->id }}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Form for creating/updating user -->
        <form id="userForm">
            @csrf
            <input type="hidden" name="id" id="userId">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save User</button>
        </form>
    </div>

@section('scripts')
    <script>
        $(document).ready(function() {
            // Submit form for creating/updating user
            $('#userForm').on('submit', function(e) {
                e.preventDefault();
                let userId = $('#userId').val();
                let url = userId ? '/users/' + userId : '/users';
                let type = userId ? 'PUT' : 'POST';

                $.ajax({
                    url: url,
                    type: type,
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response.success);
                        location.reload(); // Reload the page to see the changes
                    },
                    error: function(xhr) {
                        alert(xhr.responseJSON.error);
                    }
                });
            });

            // Edit user
            $('.edit-btn').on('click', function() {
                let userId = $(this).data('id');
                $.get('/users/' + userId + '/edit', function(data) {
                    $('#userId').val(data.id);
                    $('input[name="name"]').val(data.name);
                    $('input[name="username"]').val(data.username);
                    $('input[name="email"]').val(data.email);
                    $('input[name="phone"]').val(data.phone);
                    // Clear password field for edit
                    $('input[name="password"]').val('');
                });
            });

            // Delete user
            $('.delete-btn').on('click', function() {
                let userId = $(this).data('id');
                if (confirm('Are you sure you want to delete this user?')) {
                    $.ajax({
                        url: '/users/' + userId,
                        type: 'DELETE',
                        success: function(response) {
                            alert(response.success);
                            $('#user' + userId).remove();
                        },
                        error: function(xhr) {
                            alert('Error deleting user.');
                        }
                    });
                }
            });
        });
    </script>
@endsection
