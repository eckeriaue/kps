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
  public function btn($text, $mode = 'fill', $id = '',  $setPadding = 'px-8 h-[56px]')
  {
    return <<<"HTML"
      <button
        class="
          {$id} {$setPadding} {$this->modes['btn'][$mode]}
          text-4xl text-center rounded-full
          active:scale-95 transition-transform
          text-[14px] font-bold leading-[17px]
         "
      >
        $text
      </button>
    HTML;
  }

  public function heading($text, $level = 'h3')
  {
    return <<<"HTML"

    <{$level} class="text-[color:var(--dark)] text-4xl font-black leading-[110%]">
       $text
    </{$level}>

    HTML;
  }
};
