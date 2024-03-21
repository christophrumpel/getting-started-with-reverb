<div {{ $attributes->class(['mt-6 hidden grid-cols-4 text-sm font-medium text-gray-600 sm:grid']) }}>
    <div :class="{ 'text-blue-600 font-bold': currentStatus === '' }" class="text-blue-600">Order
        placed
    </div>
    <div :class="{ 'text-blue-600 font-bold': currentStatus === 'processing' }" class="text-center">
        Processing
    </div>
    <div :class="{ 'text-blue-600 font-bold': currentStatus === 'shipped' }" class="text-center">
        Shipped
    </div>
    <div :class="{ 'text-blue-600 font-bold': currentStatus === 'delivered' }" class="text-right">
        Delivered
    </div>
</div>
