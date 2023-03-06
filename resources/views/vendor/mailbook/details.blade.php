<div class="flex-col justify-between gap-2 w-[300px] overflow-y-auto overflow-x-hidden hidden xl:flex">
    <div class="flex flex-col p-4 divide-y divide-gray-500">
        @foreach($meta as $label => $values)
            <div class="flex flex-col py-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    {{ __($label) }}
                </div>
                @if(is_array($values))
                    @foreach($values as $mail)
                        <div class="text-sm truncate" title="{{ $mail }}">
                            {{ $mail }}
                        </div>
                    @endforeach
                @else
                    <div class="text-sm">
                        {{ $values }}
                    </div>
                @endif
            </div>
        @endforeach
        @if(!empty($attachments))
            <div class="flex flex-col py-2 gap-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    {{ __('Attachments') }}
                </div>
                <div class="flex flex-col gap-2 items-start">
                    @foreach($attachments as $attachment)
                        <div
                            class="px-2 py-1 rounded-full shadow-lg bg-gray-600 flex gap-1 items-center text-sm truncate">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13"/>
                            </svg>
                            {{ $attachment }}
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if($size)
            <div class="flex flex-col py-2">
                <div class="text-xs font-bold tracking-wide uppercase">
                    {{ __('Size') }}
                </div>
                <div class="text-sm">
                    {{ $size }}
                </div>
            </div>
        @endif
    </div>
    @if(config('mailbook.show_credits'))
        <div class="text-gray-200 text-center text-xs p-2">
            {{ __('Created with') }} <a href="https://github.com/Xammie/mailbook" target="_blank"
                            class="text-white text-bold underline">mailbook</a>
        </div>
    @endif
</div>
