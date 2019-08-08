# -*- coding: UTF-8 –*-

import requests
import os, time, json

class format:

    url = []

    def __init__(self , type = ''):
        paths = os.path
        if paths:
            self.url = paths
        else:
            if type == '':
                self.url = type
            else:
                self.url = []


    def __call__(self, *args, **kwargs):
        pass


    def runProcee(self , rds):
        if self.RDS is None:
            self.url = rds
        for i in self.url:
            pass

    def _request(self, *args):
        if self.url:
            for i in self.url:
                try:
                    response = requests.post(url = i, headers={} , json = args['data'])
                    if response.status_code != 200:
                        print(response.status_code)
                    else:
                        pass
                except Exception as e:
                    print(e.message)




