<x-app>
    <x-slot name="title">System Edit Footer</x-slot>

    <section class="show-table">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Useful Links</div>
                <form action="{{ route('agent.system.store.footerlink') }}" method="POST" enctype="multipart/form-data">
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
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="bi bi-trash"></i></button>
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
                                <option value="system_footer_top_address">Top Address</option>
                                <option value="system_footer_bottom_address">Bottom Address</option>
                                <option value="system_footer_bottom_address">Bottom Address</option>
                                <option value="system_footer_phone">Phone</option>
                                <option value="system_footer_whatsapp">Whats App</option>
                                <option value="system_footer_map">Google Map</option>
                                <option value="system_footer_facebook">FaceBook</option>
                                <option value="system_footer_youtube">Youtube</option>
                                <option value="system_footer_x">X</option>
                                <option value="system_footer_linkedin">Linkedin</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Enter contact info"
                                name="value" required>
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
                            <th class="bg-light">Top Address:</th>
                            <td>{{ system_key('system_footer_top_address') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Bottom Address:</th>
                            <td>{{ system_key('system_footer_bottom_address') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Phone:</th>
                            <td>{{ system_key('system_footer_phone') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Whats App:</th>
                            <td>{{ system_key('system_footer_whatsapp') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Google Map:</th>
                            <td> <iframe
                    src="{{ system_key('system_footer_map') }}"
                    width="400" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></td>
                        </tr>
                        <tr>
                            <th class="bg-light">FaceBook:</th>
                            <td>{{ system_key('system_footer_facebook') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Youtube:</th>
                            <td>{{ system_key('system_footer_youtube') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">X:</th>
                            <td>{{ system_key('system_footer_x') }}</td>
                        </tr>
                        <tr>
                            <th class="bg-light">Linkedin:</th>
                            <td>{{ system_key('system_footer_linkedin') }}</td>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>
    </section>

</x-app>
