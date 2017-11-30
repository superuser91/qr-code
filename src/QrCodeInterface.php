<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\QrCode;

interface QrCodeInterface
{
    public function getText(): string;
    public function getSize(): int;
    public function getMargin(): int;
    public function getForegroundColor(): array;
    public function getBackgroundColor(): array;
    public function getEncoding(): string;
    public function getErrorCorrectionLevel(): string;
    public function getLogoPath(): string;
    public function getLogoWidth(): int;
    public function getLabel(): string;
    public function getLabelFontPath(): string;
    public function getLabelFontSize(): int;
    public function getLabelAlignment(): string;
    public function getLabelMargin(): array;
    public function getValidateResult(): bool;
    public function setWriterRegistry(WriterRegistryInterface $writerRegistry): void;
}