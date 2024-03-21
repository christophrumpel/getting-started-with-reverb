<?php

namespace App\Console\Commands;

use App\Events\OrderShipmentStatusUpdated;
use App\Models\Order;
use Illuminate\Console\Command;

class UpdateOrderStatusCommand extends Command
{
    protected $signature = 'order:update-status {status}';

    protected $description = 'Update the status of an order.';

    public function handle(): void
    {
        $order = Order::first();
        $order->status = $this->argument('status');
        $order->save();

        OrderShipmentStatusUpdated::dispatch($order, $this->argument('status'));
    }
}
