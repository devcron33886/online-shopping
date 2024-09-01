<div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
    <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
        <div class="space-y-6">
            @foreach ($cart as $cartItem)
                <livewire:cart-item-component :product="$cartItem->associatedModel" :cart-item="$cartItem" :key="$cartItem->id" />
            @endforeach
        </div>
    </div>
    <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
        <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6">
            <p class="text-xl font-semibold text-gray-900">Order summary</p>

            <div class="space-y-4">
                <div class="space-y-2">
                    <dl class="flex items-center justify-between gap-4">
                        <dt class="text-base font-normal text-gray-900">Subtotal
                        </dt>
                        <dd class="text-base font-medium text-gray-900">
                            {{ Cknow\Money\Money::RWF(Darryldecode\Cart\Facades\CartFacade::getSubTotal()) }}</dd>
                    </dl>
                    <dl class="flex items-center justify-between gap-4">
                        <dt class="text-base font-normal text-gray-900">Shipping Fee
                        </dt>
                        <dd class="text-base font-medium text-gray-900">{{ $setting->formattedShippingFee() }}</dd>
                    </dl>
                </div>

                <dl class="flex items-center justify-between gap-4 border-t border-gray-900 pt-2">
                    <dt class="text-base font-bold text-gray-900">Total</dt>
                    <dd class="text-base font-bold text-gray-900">
                        {{ Cknow\Money\Money::RWF(Darryldecode\Cart\Facades\CartFacade::getSubTotal() + $setting->shipping_fee) }}
                    </dd>
                </dl>
            </div>

            <a href="#"
                class="flex w-full items-center justify-center rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Proceed
                to Checkout</a>

            <div class="flex items-center justify-center gap-2">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
                <a href="#" title=""
                    class="inline-flex items-center gap-2 text-sm font-medium text-gray-900">
                    Continue Shopping
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
