<?php

class Component
{
  public function fill_btn($text, $id)
  {
    return <<<"HTML"
      <button
        class="
          {$id}
          text-4xl text-white
          text-center
          active:scale-95 transition-transform
          rounded-full
          bg-[color:var(--blue-2)]
          px-8 py-6 
          text-[14px] font-bold leading-[17px]
         "
      >
        $text
      </button>
    HTML;
  }
};
