import os
import shutil
import sys

def set_php(path,valve,strx,op):
    opstr = path+'/'+op+'.php'
    op_fd = open(opstr,'w')
    os.chmod(opstr,0666)
    op_fd.write("<?php\n")
    op_fd.write("include( __DIR__ . \"/../../" + op + ".php" + "\");\n")
    op_fd.write("echo " + op + "(\"" + valve + "\", \"" + strx +"\");\n")
    op_fd.write("?>")
    op_fd.close()

def set_dir(valve,strx):
    path = 'valves/'+valve
    os.makedirs(path)

    set_php(path,valve,strx,"close")
    set_php(path,valve,strx,"open")


# TODO: add options for removing valves or making backup
# dir valves should only have directories for valves
def cleanvalves():
    shutil.rmtree('valves')
    if not os.path.exists('valves'):
        os.makedirs('valves')
    else:
        print("old dir not deleted")

# config has [valve str]
def main():
    cleanvalves()
    conf = 'config/init'
    try:
        conf_fd = open(conf,'r')
    except IOError:
        print("Could not open file config/init")
    conf_ls = conf_fd.readlines()
    conf_fd.close()
    valves = []
    strs = []
    for ls in conf_ls:
        toks = [strx.rstrip('\n') for strx in ls.split()]
        if len(toks) < 2:
            sys.exit("config/init incorrect syntax")
        if len(toks) > 2:
            print("ignoring...")
        if toks[0] in valves:
            sys.exit("duplicate valve...")
        if toks[1] in strs:
            sys.exit("duplicate str...")
        valves.append(toks[0])
        strs.append(toks[1])
    for ls in conf_ls:
        toks = [strx.rstrip('\n') for strx in ls.split()]
        set_dir(toks[0],toks[1])


if __name__ == "__main__":
    main()
