<?php

namespace Src\Products\Enums;

enum ProductStatus: string
{
    case Available = 'available';
    case Unavailable = 'unavailable';
}
