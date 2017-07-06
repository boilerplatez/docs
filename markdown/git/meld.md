# Using Meld merging tool on Mac

1. [OPTIONAL] Install [XQuartz](http://xquartz.macosforge.org/landing/) 
 
- Install *homebrew* and fix *git*
````
 $ ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
 $ brew doctor
 $ brew cask install tcl
````

2. Install meld with brew

        brew install meld
        OR 
        brew install homebrew/gui/meld
        
3. Copy PYTHONPATH

        brew info pygtk

4. If you dont seen anything try installing 

        brew install pygtk
    
5. Paste result of (3) in ~/.bashrc or ~/.zshrc

        export PYTHONPATH=/usr/local/lib/python2.7/site-packages:$PYTHONPATH

6. Set meld as your default git mergetool

        git config --global merge.tool meld
    
7. Go find your conflicts!

Source: [https://github.com/mxcl/homebrew/issues/20644](https://github.com/mxcl/homebrew/issues/20644)

__UPDATE (03/14/2015):__

For those who have problems in newer versions https://github.com/Homebrew/homebrew/issues/36824

If you try:

    $ brew install meld
    Error: No available formula for meld 
    Searching formulae...
    Searching taps...`

Instead try:

    $ brew install homebrew/x11/meld
    
Or you can try something like this [Answer](https://stackoverflow.com/a/43503455)

   $ brew tap caskroom/cask
   $ brew cask install meld
    
    
### Alternative method (by [@yousseb](https://github.com/yousseb))

If you want to install Meld with no hassle go to: https://yousseb.github.io/meld/

* An actual DMG file that you can install right away.
* No X required.
* Key mapping is Mac(ish).
* Used Clearlooks + Tango icon theme in the app so that it looks nice.
