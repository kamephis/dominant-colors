# Dominant Color Extractor

This script extracts the dominant colors from an image and provides a human-readable name for each color. It then groups similar colors and displays the top 10 dominant colors along with their respective percentages.

## Requirements

- PHP 8.1 or higher
- Imagick PHP extension

## Installation

1. Ensure you have PHP 8.1 or higher installed.
2. Install the Imagick PHP extension. Depending on your environment, the installation method may vary. For Homebrew on macOS, you can use:

```bash
brew install imagemagick
brew install php@8.1-imagick
```

3. Clone this repository or download the script.

## Usage

Run the script from the command line:

```bash
php main.php path_to_your_image.jpg
```

Replace `path_to_your_image.jpg` with the path to your image file.

The script will then display the top 10 dominant colors in the image, along with their respective percentages.

## Output

The output will be in the following format:

```
Color: R=255, G=255, B=255 (white) - 25.00%
...
```

## Contributing

If you'd like to contribute to this project, please submit a pull request with your changes.

## License

This script is released under the MIT License.
