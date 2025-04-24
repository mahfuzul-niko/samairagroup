<x-app>
    <x-slot name="title">System Edit</x-slot>
    <section class="system from">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">System Edit</h5>
                <div class="card-body">
                    <div class="card-body">
                        <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="key" id="key" placeholder="Key">
                                <label for="key">Key</label>
                            </div>
                    
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="value" id="value" placeholder="Value">
                                <label for="value">Value</label>
                            </div>
                    
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                </div>
            </div>
    </section>

    <section class="show-table">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">System View</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    

                </div>
            </div>
        </div>
    </section>

</x-app>
