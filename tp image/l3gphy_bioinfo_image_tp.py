# -*- coding: utf-8 -*-
"""
Created on Mon Oct 22 13:50:21 2018

@author: pbourdon
"""

import os
import numpy as np
import matplotlib.pyplot as plt
import cv2

def ChargerImage(path):
    assert os.path.exists(path), '{}: file not found'.format(os.path.abspath(path))
    return cv2.imread(path, cv2.IMREAD_GRAYSCALE)

def AfficherImage(img):
    plt.figure()
    plt.imshow(img, cmap='gray', vmin=0, vmax=255)
    plt.tight_layout()

def CalculHisto(img):
    img = np.minimum(255, np.maximum(0, img))
    histo = np.zeros(256)
    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            histo[img[i,j]] +=1
    return histo

def AfficherHisto(histo):
    plt.figure()
    plt.fill_between(range(0,len(histo)), histo, zorder=10)
    plt.axis([0, 255, 0, None])

def Start():
    img = ChargerImage('./data/cellules_1.jpg')
    AfficherImage(img)
    histo = CalculHisto(img)
    AfficherHisto(histo)

plt.close('all')
Start()
plt.show()
