<?php

class Markup
{
  private $modes = [
    "btn" =>
    [
      "fill" => 'text-white bg-[color:var(--blue-2)]',
      "border" => 'border border-[color:var(--blue-2)] text-[color:var(--dark )]'
    ],
  ];
  public function btn($text, $id = '',  $mode = 'fill', $setPadding = 'px-8 py-6')
  {
    return <<<"HTML"
      <button
        class="
          {$id} text-4xl {$this->modes['btn'][$mode]}
          text-center
          {$setPadding}
          active:scale-95 transition-transform
          rounded-full
          text-[14px] font-bold leading-[17px]
         "
      >
        $text
      </button>
    HTML;
  }
};
