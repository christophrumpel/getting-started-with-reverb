<div {{ $attributes->class(['mt-6']) }}>
    <h2 class="sr-only">Products purchased</h2>

    <div class="space-y-8">
        <div class="border-b border-t border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border">
            <div class="flex justify-between px-4 py-6 lg:p-8">
                <x-product-details/>
                <x-product-address/>
            </div>

            <div x-data="progressBar" class="border-t border-gray-200 px-4 py-6 sm:px-6 lg:p-8">
                <h4 class="sr-only">Status</h4>
                <div class="mt-6" aria-hidden="true">
                    <div class="overflow-hidden rounded-full bg-gray-200">
                        <div class="h-2 rounded-full bg-blue-600 transition-all transition-2s ease-in-out"
                             :style="{width: progressBarWidth + '%'}"></div>
                    </div>
                    <x-product-timeline/>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('progressBar', () => ({
            progressBarWidth: 1,
            currentStatus: '',
            init() {
                this.currentStatus = '{{$order->status}}';
                this.updateProgressBar();
            },
            updateProgressBar() {
                if (this.currentStatus === 'processing') {
                    this.progressBarWidth = 40;
                }
                else if (this.currentStatus === 'shipped') {
                    this.progressBarWidth = 65;
                }
                else if (this.currentStatus === 'delivered') {
                    this.progressBarWidth = 100;
                }
            }
        }));
    });
</script>
