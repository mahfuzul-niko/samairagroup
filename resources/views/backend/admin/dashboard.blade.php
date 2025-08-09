<x-app>
    <x-slot name="title"> {{ auth()->user()->name }}</x-slot>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Our Concerns
                    </div>
                    <div class="row g-4">
                        @foreach ($groups as $group)
                            <div class="col-md-2">
                                <a href="{{ $group->concern_link }}" target="_blank"><img
                                        src="{{ $group->concern_image ? Storage::url($group->concern_image) : asset('assets/img/no-profile.png') }}"
                                        class="img-fluid" alt=""></a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        SSDI Course Count
                    </div>
                    <div class="text-center">
                        <div style="font-size: 36px; font-weight: bold; color: #2c3e50;">
                            {{ $ssdi_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Language Course Count
                    </div>
                    <div class="text-center">
                        <div style="font-size: 36px; font-weight: bold; color: #2c3e50;">
                            {{ $langauge_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Jp Homes Property Count
                    </div>
                    <div class="text-center">
                        <div style="font-size: 36px; font-weight: bold; color: #2c3e50;">
                            {{ $property_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Medica product Count
                    </div>
                    <div class="text-center">
                        <div style="font-size: 36px; font-weight: bold; color: #2c3e50;">
                            {{ $medica_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        Emerging product Count
                    </div>
                    <div class="text-center">
                        <div style="font-size: 36px; font-weight: bold; color: #2c3e50;">
                            {{ $emerging_count }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
