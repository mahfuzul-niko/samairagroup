<x-app>
    <x-slot name="title"> to Completed Projects</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Create Completed Projects
                </div>
                <form action="{{ route('agent.job.store.completed') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Fields</label>
                        <div id="fields-container">
                            <div class="input-group mb-2">
                                <input type="text" name="info[]" class="form-control" placeholder="Enter value">
                                <button type="button" class="btn btn-outline-danger"
                                    onclick="this.parentElement.remove()">Remove</button>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="button" class="btn btn-outline-primary mt-2" onclick="addField()">+ Add
                                Field</button>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">save</button>
                </form>
                <div class="card-title">
                    List of Completed Projects
                </div>
                <table class="table">
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Info</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($projects as $project)
                        <tr>
                            <td><img src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/no-profile.png') }}"
                                    style="height: 60px; width: auto;" class="img-fluid" alt=""></td>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                <ul>
                                    @foreach (json_decode($project->info, true) as $count)
                                        <li>
                                            <i class="fa-solid fa-angles-right"></i>
                                            {{ $count }}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{ route('agent.job.edit.completed', $project) }}"
                                    class="btn btn-primary btn-sm d-inline-block"><i class="bi bi-pen"></i></a>
                                <form action="{{ route('agent.job.delete.completed', $project) }}" method="POST"
                                    class="d-inline-block m-0 p-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            function addField() {
                const container = document.getElementById("fields-container");

                const group = document.createElement("div");
                group.className = "input-group mb-2";

                const input = document.createElement("input");
                input.type = "text";
                input.name = "info[]";
                input.className = "form-control";
                input.placeholder = "Enter value";

                const button = document.createElement("button");
                button.type = "button";
                button.className = "btn btn-outline-danger";
                button.textContent = "Remove";
                button.onclick = () => group.remove();

                group.appendChild(input);
                group.appendChild(button);

                container.appendChild(group);
            }
        </script>
    @endpush
</x-app>
