<div>
    @include('livewire.includes.loader')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kanye West Quotes</h1>
        </div>
        <!-- Content Row -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ ucwords($title) }}</h6>
                <div>
                    <button class="btn btn-outline-primary btn-sm refresh_quotes" wire:click="refresh_quotes"><i
                            class="fa fa-sync px-1"></i>Refresh</a>
                </div>
            </div>
            <div class="card-body">
                <div wire:loading.delay.long wire:target="refresh_quotes" class="text-center my-2 col-12">
                    <!-- Preloader -->
                    {!! infinity_preloader() !!}
                </div>
                @if (count($quotes) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <td>Sr#</td>
                                <td>Quote</td>
                            </thead>
                            <tbody>
                                @foreach ($quotes as $key => $quote)
                                    <tr>
                                        <td>{{ $key + 1 }}.</td>
                                        <td>{{ $quote }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.refresh_quotes').trigger('click');
            setInterval(function() {
                $('.refresh_quotes').trigger('click');
            }, 60000);
        });
    </script>
@endpush
