<x-app>
    <x-slot name="title"> to Completed Projects</x-slot>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Edit Completed Projects
                </div>
                <form action="{{ route('agent.job.update.completed', $completed) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$completed->title}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="">Fields</label>
                        <div id="fields-container">
                            @php
                                $infos = $completed->info ? json_decode($completed->info, true) : [];
                            @endphp

                            @forelse ($infos as $info)
                                <div class="input-group mb-2">
                                    <input type="text" name="info[]" class="form-control"
                                        value="{{ $info }}" placeholder="Enter value">
                                    <button type="button" class="btn btn-outline-danger"
                                        onclick="this.parentElement.remove()">Remove</button>
                                </div>
                            @empty
                                <div class="input-group mb-2">
                                    <input type="text" name="info[]" class="form-control" placeholder="Enter value">
                                    <button type="button" class="btn btn-outline-danger"
                                        onclick="this.parentElement.remove()">Remove</button>
                                </div>
                            @endforelse
                        </div>

                        <div class="text-end">
                            <button type="button" class="btn btn-outline-primary mt-2" onclick="addField()">+ Add
                                Field</button>
                        </div>
                    </div>

                    <button class="btn btn-sm btn-primary">save</button>
                </form>


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
