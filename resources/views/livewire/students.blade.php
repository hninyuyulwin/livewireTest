<div>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
    @include('livewire.students-create')
    @include('livewire.students-update')
    <section style="padding-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Student List</h3>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentCreateModal">
                                Create New Student
                            </button>
                            
                            <div class="col-md-4 float-right">
                                <input type="search" class="form-control" placeholder="Search..." wire:model="searchTerm">
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>E-mail</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $std)
                                        <tr>
                                            <td>{{ $std->id }}</td>
                                            <td>{{ $std->firstname }}</td>
                                            <td>{{ $std->lastname }}</td>
                                            <td>{{ $std->email }}</td>
                                            <td>{{ $std->phone }}</td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#studentUpdateModal" wire:click.prevent="edit({{ $std->id }})" class="btn btn-warning">Edit</button>
                                                <button type="button" class="btn btn-danger" wire:click.prevent="delete({{ $std->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
