STYLE=xcode

ALLSRC = $(wildcard src/*.*)
RTF = $(patsubst src/%, rtf/%.rtf, $(ALLSRC))

all: $(RTF)

rtf/%.rtf: src/%
	pygmentize -O style=$(STYLE) -o $@ $<

clean:
	rm rtf/*.rtf


install:
	sudo apt-get install fonts-roboto
