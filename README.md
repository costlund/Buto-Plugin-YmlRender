# Buto-Plugin-YmlRender
Set innerHTML content from a list of files. Get from first existing file. 

## Usage
```
type: widget
data:
  plugin: yml/render
  method: render
    data:
      yml:
        -
          filename: /../buto_data/theme/[theme]/unknown.yml
        -
          filename: /theme/[theme]/buto_data/unknown.yml
```
