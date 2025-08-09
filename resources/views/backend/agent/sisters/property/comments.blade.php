<x-app>
    <x-slot name="title"> Jphomes Comments</x-slot>
    <section class="comments">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Property Comments</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Property Title</th>
                                <th>Author</th>
                                <th>Comment</th>
                                <th>Approval</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ $comment->property->title }}</td>
                                    <td>{{ $comment->name }}</td>
                                    <td>{{ $comment->comment }}</td>
                                    <td>
                                        <form action="{{ route('agent.jphomes.comment.approve', $comment) }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="comment{{ $comment->id }}" name="mark" value="1"
                                                    {{ $comment->mark == 1 ? 'checked' : '' }}
                                                    onchange="this.form.submit()">
                                                <label class="form-check-label"
                                                    for="comment{{ $comment->id }}">Approve</label>
                                            </div>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('agent.jphomes.delete.comment', $comment) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this comment?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

</x-app>
