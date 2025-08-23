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
