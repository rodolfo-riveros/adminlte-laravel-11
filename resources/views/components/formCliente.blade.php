<div>
    <div class="flex flex-col space-y-1.5 px-6">
        <h3 class="whitespace-nowrap text-2xl font-semibold leading-none tracking-tight text-white">Checkout</h3>
        <p class="text-sm text-muted-foreground text-white/80">Complete your purchase</p>
    </div>
    <div class="p-6 space-y-6">
        <div class="grid grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="name">
                    Name
                </label>
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="name" placeholder="Introduce tu nombre" />
            </div>
            <div class="space-y-2">
                <label
                    class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="email">
                    Correo electrónico
                </label>
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="email" placeholder="Introduce tu correo electrónico" type="email" />
            </div>
        </div>
        <div class="space-y-2">
            <label class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                for="phone">
                Phone
            </label>
            <input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="phone" placeholder="Enter your phone number" type="tel" />
        </div>
        <div class="space-y-2">
            <label class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                for="address">
                Shipping Address
            </label>
            <div class="grid grid-cols-3 gap-4">
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="address" placeholder="Street address" />
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="city" placeholder="City" />
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="state" placeholder="State/Province" />
            </div>
            <input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="zip" placeholder="Zip/Postal code" />
        </div>
        <div class="space-y-2">
            <label class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                Payment Method
            </label>
            <div role="radiogroup" aria-required="false" dir="ltr" class="grid grid-cols-3 gap-4" tabindex="0"
                style="outline: none;">
                <div>
                    <button type="button" role="radio" aria-checked="true" data-state="checked" value="credit-card"
                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                        id="credit-card" tabindex="-1" data-radix-collection-item="">
                        <span data-state="checked" class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="lucide lucide-circle h-2.5 w-2.5 fill-current text-current">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                        </span>
                    </button>
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex flex-col items-center justify-between rounded-md border-2 border-muted bg-popover p-4 hover:bg-accent hover:text-accent-foreground peer-data-[state=checked]:border-primary [&amp;:has([data-state=checked])]:border-primary"
                        for="credit-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="mb-3 h-6 w-6">
                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                            <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg>
                        Credit Card
                    </label>
                </div>
                <div>
                    <button type="button" role="radio" aria-checked="false" data-state="unchecked" value="debit-card"
                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                        id="debit-card" tabindex="-1" data-radix-collection-item=""></button>
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex flex-col items-center justify-between rounded-md border-2 border-muted bg-popover p-4 hover:bg-accent hover:text-accent-foreground peer-data-[state=checked]:border-primary [&amp;:has([data-state=checked])]:border-primary"
                        for="debit-card">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="mb-3 h-6 w-6">
                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                            <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg>
                        Debit Card
                    </label>
                </div>
                <div>
                    <button type="button" role="radio" aria-checked="false" data-state="unchecked"
                        value="paypal"
                        class="aspect-square h-4 w-4 rounded-full border border-primary text-primary ring-offset-background focus:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 peer sr-only"
                        id="paypal" tabindex="-1" data-radix-collection-item=""></button>
                    <label
                        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 flex flex-col items-center justify-between rounded-md border-2 border-muted bg-popover p-4 hover:bg-accent hover:text-accent-foreground peer-data-[state=checked]:border-primary [&amp;:has([data-state=checked])]:border-primary"
                        for="paypal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="mb-3 h-6 w-6">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                            <path
                                d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21">
                            </path>
                        </svg>
                        PayPal
                    </label>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4">
            <div class="space-y-2">
                <label
                    class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="card-number">
                    Card Number
                </label>
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="card-number" placeholder="1234 5678 9012 3456" type="text" />
            </div>
            <div class="space-y-2">
                <label
                    class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="expiry">
                    Expiry
                </label>
                <div class="grid grid-cols-2 gap-2">
                    <button type="button" role="combobox" aria-controls="radix-:rd:" aria-expanded="false"
                        aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                        class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="expiry-month">
                        <span style="pointer-events: none;">Month</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50"
                            aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                    <button type="button" role="combobox" aria-controls="radix-:re:" aria-expanded="false"
                        aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                        class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                        id="expiry-year">
                        <span style="pointer-events: none;">Year</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50"
                            aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="space-y-2">
                <label
                    class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                    for="cvc">
                    CVC
                </label>
                <input
                    class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                    id="cvc" placeholder="123" type="text" />
            </div>
        </div>
        <div class="space-y-2">
            <label class="text-white text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
                for="delivery-location">
                Delivery Location
            </label>
            <button type="button" role="combobox" aria-controls="radix-:r13:" aria-expanded="false"
                aria-autocomplete="none" dir="ltr" data-state="closed" data-placeholder=""
                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                id="delivery-location">
                <span style="pointer-events: none;">Select delivery location</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-chevron-down h-4 w-4 opacity-50" aria-hidden="true">
                    <path d="m6 9 6 6 6-6"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
