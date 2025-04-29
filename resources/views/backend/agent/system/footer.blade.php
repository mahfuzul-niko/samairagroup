<x-app>
    <x-slot name="title">System Edit Footer</x-slot>
    <section class="sister-concern">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Footer Sister Concern
                </div>
                <form action="{{ route('agent.system.store.footerConcern') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-2">
                            <label for="">Order</label>
                            <input type="number" class="form-control" id="" placeholder="Enter order"
                                name="order" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" placeholder="Enter title"
                                name="key" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Url</label>
                            <input type="url" class="form-control" id="" placeholder="Enter Url"
                                name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Footer List</div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="bg-light">Order</th>
                            <th class="bg-light">Title</th>
                            <th class="bg-light">Url</th>
                            <th class="bg-light">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footerconcerns as $item)
                            <tr>
                                <td>{{ $item->order }}</td>
                                <td>{{ $item->key }}</td>
                                <td>{{ $item->value }}</td>
                                <td>
                                    <form action="{{ route('agent.system.destroy.footerConcern', $item->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="show-table">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Footer Links</div>
                <form action="{{ route('agent.system.store.footerlink') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-2">
                            <label for="">Order</label>
                            <input type="number" class="form-control" id="" placeholder="Enter order"
                                name="order" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" placeholder="Enter title"
                                name="key" required>
                        </div>
                        <div class="col-md-5">
                            <label for="">Url</label>
                            <input type="url" class="form-control" id="" placeholder="Enter Url"
                                name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Footer List</div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="bg-light">Order</th>
                            <th class="bg-light">Title</th>
                            <th class="bg-light">Url</th>
                            <th class="bg-light">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($footerlinks as $item)
                            <tr>
                                <td>{{ $item->order }}</td>
                                <td>{{ $item->key }}</td>
                                <td>{{ $item->value }}</td>
                                <td>
                                    <form action="{{ route('agent.system.destroy.footerlink', $item->id) }}"
                                        method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Contact Section
                </div>
                <form action="{{ route('agent.system.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example" name="key" required>
                                <option selected>Select contact option</option>
                                <option value="system_footer_top_email">Top Email</option>
                                <option value="system_footer_bottom_email">Bottom Email</option>
                                <option value="system_footer_top_phone">Top Phone</option>
                                <option value="system_footer_bottom_phone">Bottom Phone</option>
                                <option value="system_footer_address_top">Address Top</option>
                                <option value="system_footer_address_bottom">Address Bottom</option>
                                <option value="system_footer_apple_url">Apple Store Url</option>
                                <option value="system_footer_google_url">Google Play Store Url</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4"
                                placeholder="Enter contact info" name="value" required>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-3">Submit</button>
                </form>
                <div class="card-title">
                    Contact List
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Top Email:</th>
                            <td>{{ system_key('system_footer_top_email') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Bottom Email:</th>
                            <td>{{ system_key('system_footer_bottom_email') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Top Phone:</th>
                            <td>{{ system_key('system_footer_top_phone') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Bottom Phone:</th>
                            <td>{{ system_key('system_footer_bottom_phone') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Top:</th>
                            <td>{{ system_key('system_footer_address_top') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Bottom:</th>
                            <td>{{ system_key('system_footer_address_bottom') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Bottom:</th>
                            <td>{{ system_key('system_footer_apple_url') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Address Bottom:</th>
                            <td>{{ system_key('system_footer_google_url') }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </section>

</x-app>
